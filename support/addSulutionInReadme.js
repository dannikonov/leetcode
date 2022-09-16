const rp = require('request-promise');
const cheerio = require('cheerio');
// var http = require('http');
// var https = require('https');
var fs = require('fs');
var url = require('url');

const mainUrl = 'https://leetcode.com/problems/transpose-matrix/';
// https://www.thepolyglotdeveloper.com/2018/05/scraping-paginated-lists-nodejs-cheerio-async-await-recursion/
// https://github.com/tomas/needle

let items = [];
let links = [];


const parsePage = async (url) => {
    console.log('parse ', url);

    const options = {
        uri: url,
        header: {
            'User-Agent': 'Mozilla/5.0 (iPhone; CPU iPhone OS 8_0 like Mac OS X) AppleWebKit/600.1.3 (KHTML, like Gecko) Version/8.0 Mobile/12A4345d Safari/600.1.4'
        },
        transform: function (body) {
            return cheerio.load(body);
        }
    };

    const $ = await rp(options);
    console.log($.html());
    if ($) {


        $("div[class='css-v3d350']").each((i, elem) => {
            // console.log(elem);
            // items.push(elem.attribs.href);
        });

        // $('a.next.page-numbers').each((i, elem) => {
        //     parsePage(elem.attribs.href);
        // });
    }
};


var adapterFor = (function () {
    let adapters = {
        'http:': require('http'),
        'https:': require('https'),
    };

    return function (inputUrl) {
        return adapters[url.parse(inputUrl).protocol]
    }
}());

const processItems = async (items) => {
    // uniq
    console.log('items a: ', items.length);
    items = items.filter(distinct);
    console.log('items a: ', items.length);
    for (const item of items) {
        const options = {
            uri: item,
            transform: function (body) {
                return cheerio.load(body);
            }
        };

        const $ = await rp(options);

        $('img').each((i, elem) => {
            links.push(elem.attribs.src);
        });
    }

    console.log('links a: ', links.length);
    links = links.filter(distinct);
    console.log('links b: ', links.length);
    let i = 0;
    for (const link of links) {
        console.log(link);

        const filename = '/tmp/imgs/' + i + '_' + Date.now() + '.jpg';
        const file = fs.createWriteStream(filename);
        if (link && link != '') {
            const request = adapterFor(link).get(link, function (response) {
                response.pipe(file);
            });
        }
        i++;
    }

    console.log(links);
};

parsePage(mainUrl);
