#include "functions.h"

void print_vector(vector<int> &vector) {
    for (auto item : vector) {
        std::cout << item << ' ';
    }
}