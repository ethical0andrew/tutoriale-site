#include <iostream>
using namespace std;
int n, v[10]; // v[n + 1]
bool adv(int x) {
  for (int i = 1; i < x; i++)
    if (v[i] == v[x]) 
      return false;
  return true;
}
void backtracking(int x) {
  for (int i = 1; i <= n; i++) {
    v[x] = i;
    if (adv(x) == true) 
      if (x == n) {
        for (int j = 1; j <= n; j++)
          cout << v[j] << " ";
        cout << "\n";
      } else backtracking(x + 1);
  }
}
int main() {
  cin >> n;
  backtracking(1);
  // 1 2 3 ... n
  return 0;
}
