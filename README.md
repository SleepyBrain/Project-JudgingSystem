<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <strong>&laquo; share Via: </strong>
				<a href="http://fb.com/">facebook</a>
                
				<span class="right">
                    <a href="#">
                        <strong>Just a Simple Project...</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1>Online <strong>Compile and Execute</strong>Program </h1>
				<nav class="codrops-demos">
					<a class="current-demo" href="index.php">Home</a>
					<a href="Login/index.php">Login</a>
					
				</nav>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<center><h1> Welcome to Our Project!</h1></center>
			</section>
        </div>
    </body>
    
    <!--/ Simple Project:
1. Submit a Program in C or C++
2. Execute by Teachers or Judges 
3. Give a result 
4. Show sumbmissions
5. Show standings(Only based on the number of problem solved by a contestant or team)

Database Name: OnlineProject
Table: user
Field: ID, userName, Password, teacher(For admin value is 2)
Table: submitteddata
Field: ID, submitTime, userName, Problem, Lang, Verdict
Table: judgetable
Field: ID, judgeNo, Lang, FileName


Default User : admin Password: admin

1. login: if Login succeded then go to user or admin or Judges folder.
2. In user folder: User can submit a code, find all of his submissions and current standing of the contest. 
3. In judges folder(currently we set only 2 judge for the contest): Judge can execute a submitted code of his problems, can find current standing of the contest. We consider that each judge will set 3 problems of the contest in following order.
4. In admin folder: Admin can find the current condition of his contest environment.

in user code:
#include<bits/stdc++.h>
using namespace std;

int main(){
     freopen("'Problem name without quote'out.txt","w",stdout);
     freopen("'Problem name without quote'in.txt","r",stdin);
     ".....Users code will start from here....."
     return 0;
}

must be wrritten this portion.
That's it. Thank you. Enjoy our project. -->
</html>
