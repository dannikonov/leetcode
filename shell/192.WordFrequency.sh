#!/bin/bash

# Read from the file words.txt and output the word frequency list to stdout.
cat words.txt | sed 's/\s/\n/g' | sed '/^$/d' |  sort | uniq -c | sort -r -k1 | sed 's/^\s*//g' | awk -F' ' '{print $2 " " $1}'
