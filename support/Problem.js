module.exports = class Problem {
    constructor(id, url, solutions, complexity) {
        this.isOk = true;
        this.id = parseInt(id.trim());
        this.url = this.parseUrl(url);
        this.solutions = this.parseSolutions(solutions);
        this.complexity = this.parseComplexity(complexity);
    }

    parseUrl(string) {
        let regexp = /\[(?<title>[\w\s-\(\)]+)\]\((?<url>[^\]]+)\)/;
        let object = string.match(regexp);

        if (!object?.groups) {
            console.log(`Couldn't parse URL`, string);
            this.isOk &= false;
        } else {
            return {
                title: object.groups.title,
                url: object.groups.url
            };
        }
    }

    parseSolutions(string) {
        let regexp = /\[(?<lang>PHP|JS|C\+\+|BASH|SQL)\](?<path>.*)/;
        let solutions = {};

        for (let solution of string.split(',')) {
            solution = solution.trim();
            let object = solution.match(regexp);

            if (!object?.groups) {
                console.log(`Couldn't parse solutions`, string);
                this.isOk &= false;
            } else {
                solutions[object.groups.lang] = object.groups.path;
            }
        }

        return solutions;
    }

    parseComplexity(string) {
        let regexp = /(Easy|Medium|Hard)/;
        let object = string.match(regexp);

        if (!object) {
            console.log(`Couldn't parse complexity`, string);
            this.isOk &= false;
            console.log(this.isOk);
        } else {
            return object[1];
        }
    }
};