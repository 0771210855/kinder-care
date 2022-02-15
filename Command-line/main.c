#include<stdio.h>
#include<stdlib.h>
#include<windows.h>
#include<conio.h>
#include<string.h>
#include<mysql.h>
#include<time.h>
//SQL ERROR FUNCTION
void finish_with_error(MYSQL*conn){
fprintf(stderr,"%s\n",mysql_error(conn));
mysql_close(conn);
exit(1);
}



int main(){
system("color 0b");
int select;
double time_taken;
//CURRENT TIME
char array[100]={"6"};
  time_t currentTime;
  time(&currentTime);
  time_t p=ctime(&currentTime);
  printf("\r \n%s\n",p);
//other variables
char dummy[25];
double total;
    float entry=0;
    int result;
    float average;
    double score=0;
    float sum=0;
    int Choice;
    int count=1;
    int n,i,j;
//DECLARATION OF MYSQL VARIABLES
MYSQL_RES *resultset;
MYSQL_RES *res;
MYSQL_ROW row;
MYSQL_RES*name;
char Fname[30], sqlquery[10];
char pass[10];
MYSQL * conn;
//database connection
  printf("\n\n\t\t\t\ \xB2\xB2\xB2\xB2\xB2\xB2\xB2 KINDERCARE PUPIL ASSIGNMENT SYSTEM.\xB2\xB2\xB2\xB2\xB2\xB2\xB2\n\n\t\tEnter the usercode to login:");
  scanf("%s",dummy);

   conn = mysql_init(NULL);
   conn = mysql_real_connect(conn,"localhost","root","","my_db",0,NULL,0);
   if(conn){
        system("cls");

   }
   else {
     printf("\t\t\t Please re-try again\n");
   }
   /*time_t start_time;
   time_t end_time;
   start_time=time(NULL);
   end_time=time(NULL);
   */
   clock_t t;
   struct tm*myTime=localtime(&currentTime);
   char start_date[255]="";
   char year[20];
   itoa(myTime->tm_year+1900,year,10);
   char month[20];
   itoa(myTime->tm_mon+1,month,10);
   char day[20];
   itoa(myTime->tm_mday,day,10);
   strcat(start_date,year);
   strcat(start_date,"-");
   strcat(start_date,month);
   strcat(start_date,"-");
   strcat(start_date,day);
   printf("%s",start_date);
   //user login
   char query7[255]="SELECT * FROM pupils WHERE user_code=\'";
   strcat(query7,dummy);
   strcat(query7,"\'");
   if(mysql_query(conn,query7)){
    finish_with_error(conn);
   }
   res=mysql_store_result(conn);
   if((row=mysql_fetch_row(res))>0){
   //LETTER STRUCT
    struct character{
    char letter;
    int position[7][5];
};

struct character guide[26]={
 {'A', {{0,0,1,0,0},{0,1,0,1,0},{1,0,0,0,1},{1,1,1,1,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1}}	},

	{'B',{{1,1,1,1,0},{1,0,0,0,1},{1,0,0,0,1},{1,1,1,1,1},{1,0,0,0,1},{1,0,0,0,1},{1,1,1,1,0}} },

	{'C', {{0,0,1,1,1},{0,1,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{0,1,0,0,0},{0,0,1,1,1}} },

	{'D',{{1,1,1,1,0},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,1,1,1,0}} },

	{'E',{{1,1,1,1,1},{1,0,0,0,0},{1,0,0,0,0},{1,1,1,1,1},{1,0,0,0,0},{1,0,0,0,0},{1,1,1,1,1}} },

	{'F', {{1,1,1,1,1},{1,0,0,0,0},{1,0,0,0,0},{1,1,1,1,1},{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0}} },

	{'G', {{0,0,1,1,1},{0,1,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,0,1,1,1},{1,0,0,0,1},{0,1,1,1,0}} },

	{'H', {{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,1,1,1,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1}} },

	{'I',{{1,1,1,1,1},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{1,1,1,1,1}} },

    {'J',{{1,1,1,1,1},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{1,0,1,0,0},{0,1,1,0,0}} },

    {'K',{{1,0,0,0,1},{1,0,0,1,0},{1,0,1,0,0},{1,1,0,0,0},{1,0,1,0,0},{1,0,0,1,0},{1,0,0,0,1}} },

    {'L',{{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,1,1,1,1}} },

    {'M',{{1,0,0,0,1},{1,1,0,1,1},{1,0,1,0,1},{1,0,1,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1}} },

    {'N',{{1,0,0,0,1},{1,1,0,0,1},{1,0,0,0,1},{1,0,1,0,1},{1,0,0,0,1},{1,0,0,1,1},{1,0,0,0,1}} },

    {'O',{{0,1,1,1,0},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{0,1,1,1,0}} },

    {'P',{{1,1,1,1,0},{1,0,0,0,1},{1,0,0,0,1},{1,1,1,1,1},{1,0,0,0,0},{1,0,0,0,0},{1,0,0,0,0}} },

    {'Q',{{0,1,1,1,0},{1,0,0,0,1},{1,0,0,0,1},{0,1,1,1,0},{0,0,1,0,0},{0,0,0,1,0},{0,0,0,0,1}} },

    {'R',{{0,1,1,1,0},{1,0,0,0,1},{1,0,0,0,1},{1,1,1,1,0},{1,0,1,0,0},{1,0,0,1,0},{1,0,0,0,1}} },

    {'S',{{0,1,1,1,0},{1,0,0,0,0},{1,0,0,0,0},{0,1,1,1,0},{0,0,0,1,0},{0,0,0,1,0},{1,0,1,0,0}} },

    {'T',{{1,1,1,1,1},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0}} },

    {'U',{{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{0,1,1,1,0}} },

    {'V',{{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{0,1,0,1,0},{0,0,1,0,0}} },

    {'W',{{1,0,0,0,1},{1,0,0,0,1},{1,0,0,0,1},{1,0,1,0,1},{1,0,0,0,1},{1,1,0,1,1},{1,0,0,0,1}} },

    {'X',{{1,0,0,0,1},{0,1,0,1,0},{0,0,1,0,0},{0,0,1,0,0},{0,1,0,1,0},{1,0,0,0,1},{1,0,0,0,1}} },

    {'Y',{{1,0,0,0,1},{0,1,0,1,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0},{0,0,1,0,0}} },

    {'Z',{{1,1,1,1,1},{0,0,0,1,0},{0,0,1,0,0},{0,1,0,0,0},{1,0,0,0,0},{1,0,0,0,0},{1,1,1,1,1}}}
};
//welcome
printf("\t\t\t\tWelcome ");
char query8[255]="SELECT lastname FROM pupils WHERE user_code=\'";
strcat(query8,dummy);
strcat(query8,"\'");
if(mysql_query(conn,query8)){
    finish_with_error(conn);
}
res=mysql_store_result(conn);
if(res==NULL){
    finish_with_error(conn);
}
int num_fields=mysql_num_fields(res);
   while((row=mysql_fetch_row(res))){
    for(int i=0;i<num_fields;i++){
    printf("%s",row[i]?row[i]:NULL);

      }
   }
       mysql_free_result(res);
      //end welcome
   //LETTER STRUCT
   label:
        //system("cls");
    printf("\n\n\t\t\t\t\tKINDERCARE SCHOOL ASSIGNMENT SYSTEM");
    printf("\n\n\n\t\t\t\xB2\xB2\xB2\xB2\xB2\xB2\xB2 WELCOME TO THE MAIN MENU \xB2\xB2\xB2\xB2\xB2\xB2\xB2");
    printf("\n\n\t\t1.viewall\n\t\t2.checkstatus \n\t\t3.viewassignment () \n\t\t4.checkdates (shows if there is an assignment within a specified date range) \n\t\t5.requestactivation\n\t\t6.attempt\n\n\n\n\n\t\t ");

    char choice[20];
    char a[20]="viewall";
    char b[20]="checkstatus";
    char c[20]="viewassignment";
    char d[20]="checkdates";
    char e[20]="requestactivation";
    char f[10]="attempt";
    char g[10]="DISPLAY";
    printf("Enter choice from the menu list by typing the command as stated:");
    scanf("%s",choice);
    /*VIEWALL*/
    if(strcmp(a,choice)==0){
            printf("\n__________________________________________________________________\n");
            printf("\n |ASSIGNMENT_ID\t\t|END_DATE\t\t|END_TIME\n");
            printf("__________________________________________________________________|\n");
   if(mysql_query(conn,"SELECT assignmentID,end_date,end_time FROM assignment")){
    finish_with_error(conn);
   }
   res=mysql_store_result(conn);
   if(res==NULL){
    finish_with_error(conn);
   }
   int num_fields=mysql_num_fields(res);
   while((row=mysql_fetch_row(res))){
    for(int i=0;i<num_fields;i++){
    printf(" \t  %s\t",row[i]?row[i]:NULL);

      }

//printf("\n");
printf("\t\t\t\n__________________________________________________________________|\n");
    }
   mysql_free_result(res);
   //goto label;

  printf("Enter 1 to go to menu and other key to exit");
   scanf("%d",&select);
   if (select==1)
        {

            system("cls");
            goto label;
        }

else {
        system("cls");
        //close();
        printf("do you wish to exit");
        }

    }
    /*CHECKSTATUS*/
    else if(strcmp(b,choice)==0){
        printf("\n\t\t\t|ASSIGNMENT_ID\t|ATTEMPTED\t|AVERAGE_SCORE\t|PERCENTAGE_MISSED\t|PERCENTAGE_ATTEMPTED\n");

   if(mysql_query(conn,"SELECT assignmentID,average, FROM results where user_code = \'")){
    finish_with_error(conn);
   }
   res=mysql_store_result(conn);
   if(res==NULL){
    finish_with_error(conn);
   }
   int num_fields=mysql_num_fields(res);
   while((row=mysql_fetch_row(res))){
for(int i=0;i<num_fields;i++){
 printf(" %s\t\t",row[i]?row[i]:NULL);

      }

printf("\n");
    }
mysql_free_result(res);
       // goto label;
       printf("Enter 1 to go to menu and other key to exit");
        scanf("%d",&select);
        if (select==1)
        {

            system("cls");
            goto label;
        }

else {
        system("cls");
        //close();
printf("do you wish to exit");
        }

        //END OF CHECKSTATUS
    }
    /*VIEWASSIGNMENT*/
    else if(strcmp(c,choice)==0){
        char future_date[255];
       printf("ENTER FUTURE DATE IN FORMAT *YEAR-MONTH-DAY*:");
    scanf("%s",future_date);
    char query11[255]="SELECT assignmentID,start_date,end_date FROM assignment WHERE start_date BETWEEN \'";
    strcat(query11,start_date);
    strcat(query11,"\'");
    strcat(query11," AND \'");
    strcat(query11,future_date);
    strcat(query11,"\'");
    printf("%s",query11);
        printf("\n |ASSIGNMENT_ID\t|START_DATE\t|END_DATE\n");
          if(mysql_query(conn,query11)){
    finish_with_error(conn);
   }
   res=mysql_store_result(conn);
   if(res==NULL){
    finish_with_error(conn);
   }
   int num_fields=mysql_num_fields(res);
   while((row=mysql_fetch_row(res))){
   for(int i=0;i<num_fields;i++){
     printf("   %s\t\t",row[i]?row[i]:NULL);

      }

    printf("\n");
    }
     mysql_free_result(res);
     goto label;

        //END OF VIEWASSIGNMENT
    }
    /*check date*/
    else if(strcmp(d,choice)==0){
        printf("\n |ASSIGNMENT_ID\t|VALID DATE\n");
              if(mysql_query(conn,"SELECT assignmentID,start_date FROM assignment")){
    finish_with_error(conn);
   }
   res=mysql_store_result(conn);
   if(res==NULL){
    finish_with_error(conn);
   }
   int num_fields=mysql_num_fields(res);
   while((row=mysql_fetch_row(res))){
   for(int i=0;i<num_fields;i++){
     printf("   %s\t\t",row[i]?row[i]:NULL);

      }

printf("\n");
    }
mysql_free_result(res);
       // goto label;

printf("Enter 1 to go to menu and other key to exit");
   scanf("%d",&select);
   if (select==1)
        {

            system("cls");
            goto label;
        }

else {
        system("cls");
        //close();
printf("do you wish to exit");
        }
        //CHECKDATES
    }
    else if(strcmp(e,choice)==0){
    conn = mysql_init(NULL);
    conn = mysql_real_connect(conn,"localhost","root","","my_db",0,NULL,0);
   // strcpy(query,"INSERT INTO activation_request (user_code,) VALUES(\'");
    printf("\n ACTIVATION REQUEST SENT TO TEACHER");

        //ACTIVATION REQUEST SENDING

 printf("\n\t\t\tEnter 1 to go to menu and other key to exit:");
   scanf("%d",&select);
   if (select==1)
        {

            system("cls");
            goto label;
        }

else {
        system("cls");
        //close();
        printf("You are exiting");
        }
        //REQUEST ACTIVATION
    }
    //ATTEMPT
    else if(strcmp(f,choice)==0){
   char index[10];
     char assign[255];
     printf("\nENTER ASSIGNMENT ID TO ATTEMPT:");
     scanf("%s",index);
     //CHECK ATTEMPT
    /* char attempted[255]="ATTEMPTED";
     char sammie[255]="HET";
      char assign2[255]="SELECT ATTEMPT FROM results WHERE user_code=\'";
    strcat(assign2,dummy);
    strcat(assign2,"\' AND assignmentID=\'");
    strcat(assign2,index);
    strcat(assign2,"\'");
    if(mysql_query(conn,assign2)){
        finish_with_error(conn);
    }
      res=mysql_store_result(conn);
   if(res==NULL){
    finish_with_error(conn);
   }
   row=mysql_fetch_row(res);
   strcpy(sammie,row[0]?row[0]:"NO ATTEMPTED");
 if(strcmp(sammie,attempted)==0){
      printf("ALREADY ATTEMPTED");
      goto label;
  }*/
     //CLOSE
    // conn = mysql_init(NULL);
   //conn = mysql_real_connect(conn,"localhost","root","","kindercare_sys",0,NULL,0);
    strcpy(assign,"SELECT char_1,char_2,char_3,char_4,char_5,char_6,char_7,char_8 FROM assignment WHERE assignmentID = \'");
    strcat(assign,index);
    strcat(assign,"\'");
     if(mysql_query(conn,assign)){
      finish_with_error(conn);
    }
     res=mysql_store_result(conn);
   if(res==NULL){
    finish_with_error(conn);
   }
  // printf("\n__________________________________________________________________\n");
   //printf("AID\tC1\tC2\tC3\tC4\tC5\tC6\tC7\tC8\n");
   //printf("__________________________________________________________________\n");
   int num_fields=mysql_num_fields(res);

   row=mysql_fetch_row(res);
   strcpy(array, row[0]);
    for(int i=1;i<num_fields;i++){
     // printf("%s\t",row[i]?row[i]:NULL);
        //try
    strcat(array,row[i]?row[i]:"");
//try
      }

  //printf("\n__________________________________________________________________\n");
mysql_free_result(res);
//mysql_close(conn);
printf("\n=============================================================\nLETTERS DRAWN:\n");
    //printf("%s\n",array);
    //START REMOVE
size_t x=0;
size_t b=strlen(array);
for (x=0;x<strlen(array);x++){
    printf("%c\t",array[x]);
}
printf("\n=============================================================\n");
t=clock();
for (x=0;x<strlen(array);x++){

if(array[x]=='B'){
        entry=0;
        printf("Character to Draw");
          n=1;
            int B[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(int i=0;i<7;i++){
		for(int j=0;j<5;j++){
		printf("Enter 0 or 1 in position B[%d][%d]:",i,j);
		scanf("%d",&B[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(B[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	printf("%f entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(B[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='A'){
       printf("Character to Draw");
        entry=0;
            n=0;
            int A[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t A[%d][%d]:",i,j);
		scanf("%d",&A[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(A[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(A[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='C'){
    entry=0;
       printf("Character to Draw");
            n=2;
            int C[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t C[%d][%d]:",i,j);
		scanf("%d",&C[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(C[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(C[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //print array
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//NEW

else if(array[x]=='D'){
    entry=0;
      printf("Character to Draw");
            n=3;
            int D[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t D[%d][%d]:",i,j);
		scanf("%d",&D[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(D[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(D[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='E'){
    entry=0;
       printf("Character to Draw");
            n=4;
            int E[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t E[%d][%d]:",i,j);
		scanf("%d",&E[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){

		for(j=0;j<5;j++){
		if(E[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(E[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='F'){
    entry=0;
       printf("Character to Draw");
            n=5;
            int F[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf(" \t\t\t\tF[%d][%d]:",i,j);
		scanf("%d",&F[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(F[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(F[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='H'){
    entry=0;
       printf("Character to Draw");
            n=7;
            int H[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\tH[%d][%d]:",i,j);
		scanf("%d",&H[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(H[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(H[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='G'){
    entry=0;
       printf("Character to Draw");
            n=6;
            int G[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf(" \t\t\t\t G[%d][%d]:",i,j);
		scanf("%d",&G[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(G[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(G[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='I'){
    entry=0;
       printf("Character to Draw");
            n=8;
            int I[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t I[%d][%d]:",i,j);
		scanf("%d",&I[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(I[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(I[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='J'){
    entry=0;
       printf("Character to Draw");
            n=9;
            int J[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t J[%d][%d]:",i,j);
		scanf("%d",&J[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(J[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(J[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='K'){
    entry=0;
       printf("Character to Draw");
            n=10;
            int K[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t K[%d][%d]:",i,j);
		scanf("%d",&K[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(K[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(K[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
else if(array[x]=='M'){
    entry=0;
       printf("Character to Draw");
            n=12;
            int M[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t M[%d][%d]:",i,j);
		scanf("%d",&M[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(M[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(M[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//letter l
else if(array[x]=='L'){
    entry=0;
       printf("Character to Draw");
            n=11;
            int L[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t L[%d][%d]:",i,j);
		scanf("%d",&L[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(L[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(L[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER N
else if(array[x]=='N'){
    entry=0;
       printf("Character to Draw");
            n=13;
            int N[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t N[%d][%d]:",i,j);
		scanf("%d",&N[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(N[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(N[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER O
else if(array[x]=='O'){
    entry=0;
       printf("Character to Draw");
            n=14;
            int O[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t O[%d][%d]:",i,j);
		scanf("%d",&O[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(O[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(O[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER P
else if(array[x]=='P'){
    entry=0;
       printf("Character to Draw");
            n=15;
            int P[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t P[%d][%d]:",i,j);
		scanf("%d",&P[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(P[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(P[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER Q
else if(array[x]=='Q'){
    entry=0;
       printf("Character to Draw");
            n=16;
            int Q[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t Q[%d][%d]:",i,j);
		scanf("%d",&Q[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(Q[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(Q[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER R
else if(array[x]=='R'){
    entry=0;
       printf("Character to Draw");
            n=17;
            int R[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t R[%d][%d]:",i,j);
		scanf("%d",&R[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(R[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(R[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER S
else if(array[x]=='S'){
    entry=0;
       printf("Character to Draw");
            n=18;
            int S[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("Enter 0 or 1 in position S[%d][%d]:",i,j);
		scanf("%d",&S[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(S[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(S[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER T
else if(array[x]=='T'){
    entry=0;
       printf("Character to Draw");
            n=19;
            int T[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t T[%d][%d]:",i,j);
		scanf("%d",&T[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(T[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(T[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER U
else if(array[x]=='U'){
    entry=0;
       printf("Character to Draw");
            n=20;
            int U[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t U[%d][%d]:",i,j);
		scanf("%d",&U[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(U[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(U[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER V
else if(array[x]=='V'){
    entry=0;
       printf("Character to Draw");
            n=21;
            int V[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t V[%d][%d]:",i,j);
		scanf("%d",&V[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(V[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(V[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER W
else if(array[x]=='W'){
    entry=0;
       printf("Character to Draw");
            n=22;
            int W[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t W[%d][%d]:",i,j);
		scanf("%d",&W[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(W[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(W[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER X
else if(array[x]=='X'){
    entry=0;
       printf("Character to Draw");
            n=23;
            int X[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t X[%d][%d]:",i,j);
		scanf("%d",&X[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(X[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(X[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER Y
else if(array[x]=='Y'){
    entry=0;
       printf("Character to Draw");
            n=24;
            int Y[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t Y[%d][%d]:",i,j);
		scanf("%d",&Y[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(Y[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(Y[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//LETTER Z
else if(array[x]=='Z'){
    entry=0;
       printf("Character to Draw");
            n=25;
            int Z[7][5];
               printf("\n%s\n",&guide[n].letter);
            for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		printf("\t\t\t\t Z[%d][%d]:",i,j);
		scanf("%d",&Z[i][j]);
		fflush(stdin);
		}
		printf("\nEnter next row\n");
	}
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
		if(Z[i][j]==guide[n].position[i][j]){
            entry++;
		 }
		}
	}
	//MARKS
	printf("%f correct entries\n",entry);
	score=(entry/35)*100;
    sum+=score;
	printf("your score is %f\n",score);
	printf("Your character\n");
	for(i=0;i<7;i++){
		for(j=0;j<5;j++){
            if(Z[i][j]==1){
                       printf("*");
                }
                else{
                    printf(" ");
                }
		}
		printf("\n");
	}
               //printarray
               printf("\ncorrect character\n");
        for(i=0;i<7;i++){
            for(j=0;j<5;j++){
                if(guide[n].position[i][j]==1){
                    printf("*");
                }
                else{
                    printf(" ");
                }
            }
            printf("\n");
        }

}
//END OF FOR LOOP
t = clock() - t;

}

printf("%f",time_taken);
    //REMOVE
    average=sum/(strlen(array));
    printf("\nthank you for attempting\n Your average for this assignment is %f",average);
    //string to store results sent to database
    char AVERAGE[25];
    char query[255];
    sprintf(AVERAGE,"%.2f",average);
    printf("\n %s",AVERAGE);
    //send marks
    conn = mysql_init(NULL);
    conn = mysql_real_connect(conn,"localhost","root","","my_db",0,NULL,0);
    strcpy(query,"INSERT INTO results (user_code,assignmentID,average) VALUES(\'");
    strcat(query,dummy);
    strcat(query,"\',\'");
    strcat(query,index);
    strcat(query,"\',\'");
    strcat(query,AVERAGE);
    strcat(query,"\')");
//    printf("\n%s",query);
    if(mysql_query(conn,query)){
        finish_with_error(conn);
    }
    //SEND MARKS TO DATABASE HERE

printf(" \n\t\t\t thank you for attempting successfully \n\n t\t\t Enter 1 to go to menu and any other character to exit'");
int choice_set;
scanf("%d",&choice_set);
if(choice_set == 1){
    system("cls");
    goto label;
}else{
 exit;
}

    }
   // ATTEMPT
    else{
           system("cls");
    printf("\t Hey its a wrong command. Try again\n");
        goto label;
    }
     mysql_close(conn);
}
else{
    printf("\n\n\n\t\t\t\t ******INVALID USERCODE*****");
    main();
}

}
