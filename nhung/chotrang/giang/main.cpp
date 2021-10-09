#include <iostream>
#include <string>
using namespace std;

int main()
{
	float a, b;

    cout << "nhap a và b: ";
	cin >> a >> b;

	cout << "tong a+b: "
		<< a+b
		<< endl;

	fflush(stdin);
	cin.get();
	return 0;
}
