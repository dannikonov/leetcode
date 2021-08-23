#include "functions.h"
#include "set"
#include "algorithm"
#include "cmath"

typedef long long ll;
typedef vector<int> rect;

class Solution {
public:
    int rectangleArea(vector<vector<int>> &rectangles) {
        ll area = 0;
        ll modulo = pow(10, 9) + 7;

        set<int>y_coords;

        for (auto r : rectangles) {
            y_coords.insert(r[1]);
            y_coords.insert(r[3]);
        }

        sort(rectangles.begin(), rectangles.end(),
             [](rect &a, rect &b) {
            return a[0] < b[0];
        });


        int prev_y = *y_coords.begin();
        for (auto y: y_coords) {
            ll h = y - prev_y;
            ll x_start = (*rectangles.begin())[0];
            ll x_end = x_start;
            for (auto r : rectangles) {
                if (r[1] <= prev_y && r[3] >= y) {
                    if (r[0] > x_end) {
                        area += h * (x_end - x_start) % modulo;
                        x_start = r[0];
                    }

                    if (r[2] > x_end) {
                        x_end = r[2];
                    }
                }
            }

            area += h * (x_end - x_start) % modulo;
            prev_y = y;
        }

        return area % modulo;
    }
};

int main() {
    rect r1{0, 0, 2, 2};
    rect r2{1, 0, 2, 3};
    rect r3{1, 0, 3, 1};
    vector<rect> in{r1, r2, r3};
    Solution s;
    cout << s.rectangleArea(in);
//    cout << s.maxProduct(t1);
//
//    remove_tree(t1);

    return 0;
}
