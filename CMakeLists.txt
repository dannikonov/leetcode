cmake_minimum_required(VERSION 3.20)
project(leetcode)

set(CMAKE_CXX_STANDARD 14)

add_executable(leetcode
        algorithms/cpp/functions.cpp algorithms/cpp/functions.h
        algorithms/cpp/ListNode.cpp algorithms/cpp/ListNode.h
        algorithms/cpp/TreeNode.cpp algorithms/cpp/TreeNode.h
        algorithms/cpp/856.ScoreofParentheses.cpp)
