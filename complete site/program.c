#include<stdio.h>
#include<conio.h>
int main(int argc, char const *argv[])
{ 
    int unit,bill;
     printf("enter unit");
     scanf("%d",&unit);
     if (unit <= 300)
     {
         bill = unit *2;
     }else if( unit > 300 || unit <= 500)
     {
         bill = unit *5;
     }else{
         bill = unit *7;
     }
     bill = bill + 150;
     if (bill > 2000){
         bill = bill + (bill * 5 / 100);
         printf("bill is %d",bill);
     }
     getch();
}