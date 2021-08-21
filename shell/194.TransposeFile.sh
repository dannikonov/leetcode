#!/bin/bash
# Read from the file file.txt and print its transposed content to stdout.

fields=$(awk -F' ' END'{print NF}' file.txt);
for i in $(seq 1 $fields);
do
  echo $(cut -d' ' -f$i file.txt);
done;