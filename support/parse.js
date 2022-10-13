const fs = require('fs');
const Problem = require('./Problem');

const file = '../Readme.md'

function parseFile(file) {
    return new Promise((resolve, reject) => {
        if (fs.existsSync(file)) {
            fs.readFile(file, 'utf8', (err, data) => {
                if (err) {
                    reject(err);

                    return;
                }

                let regexTopic = /^ (Algorithms|Database|Shell|Concurrency)/;
                // let regexProblem = /^\|(?<id>[\d\s]+)\|\[(?<title>[\w\s-]+)\]\((?<url>[^\]]+)\)\|/;
                let regexProblem = /^\|[\d\s]+\|/;
                let topics = {};
                for (let topic of data.split('###')) {
                    let tmpTopic = topic.match(regexTopic);
                    if (tmpTopic) {
                        let name = tmpTopic[1];
                        topics[name] = [];

                        for (let line of topic.split('\n')) {
                            if (regexProblem.test(line)) {
                                let parts = line.split('|');
                                let problem = new Problem(
                                    parts[1],
                                    parts[2],
                                    parts[3],
                                    parts[4]
                                );
                                if (problem.isOk) {
                                    topics[name].push(problem);
                                } else {
                                    console.log(`Couldn't create problem`);
                                }
                            }
                        }
                    }
                }

                resolve(topics);
            });
        } else {
            reject('No such file', file);
        }
    });
}

parseFile(file).then(
    resolve => {
        console.log(resolve);
    },
    reject => {
        console.log('Error occurred');
        console.log(reject);
    }
);