#include <iostream>
#include <string>
using namespace std;

int main()
{
	float a, b;

    cout << "nhap a v� b: ";
	cin >> a >> b;

	cout << "tong a+b: "
		<< a+b
		<< endl;

	fflush(stdin);
	cin.get();
	return 0;
}
