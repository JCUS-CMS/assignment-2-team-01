# Assignment-2-team-01
Assignment-2-team-01 created by GitHub Classroom


Team memmbers (LinkedIn profile link):
KayZin’s Profile  linkedin.com/in/kayzinphone

Chaw Su’s Profile linkedin.com/in/chawsuthawtar

Aye Mya’s Profile linkedin.com/in/ayemyaphyucin

Hav’s Profile linkedin.com/in/hav-kokfong

Xinhang's Profile linkedin.com/in/xinhang-xu-2b287519b


# Environment
-Localhost: Our team use Vagrant and virtual machine to create local environment for WordPress. All the procedures are working on our localhost at first.

-Staging site: After finishing developing on localhost, we migrate our site to staging site which is used for testing.
 https://havk.sgedu.site/dcm.staging/

-Production site: It is a stable site and contains our final finished works. 
 https://havk.sgedu.site/doctor.connect.malaysia/



# Project overview
This project is about creating a dynamic website for the health professionals volunteer group who create access to quality healthcare for remote inaccessible and poor socio-economic areas irrespective of race, religion or nationality for free.

We made the website using Wordpress and worked on it as a group. To coordinate better, we used Github, Trello, Slack and Google Drive. The whole project is set up with local, staging and then production. We started off with setting up local environments, having connectionless automatic process with SSH, and using webhook to automatically push changes from our local to our staging site in Siteground whenever we push to Github. However, GitHub does not handle the changes related to database so we used the WP DB sync plugin to migrate the database.

Moreover, we have used a starter theme, Underscores, to developed our own custom theme, Vital. Since all of us have very little knowledge about theme development, we did not achieve a satisfactory result. However, we learned a lot along the way which we believe would help us in the future. We faced many challenges and difficulties but we managed to find solutions or work our way around it even if we had to invest a lot of time and effort.

URL link: https://havk.sgedu.site/doctor.connect.malaysia


# Theme Info
Please refer to our Vital theme's readme.txt in the Vital theme folder.


# Database
In our project, a WordPress plugin named 'Migrate DB' is used for databse migration. The plugin is inside our Github repositery so it is available to use in any WordPress environment. 

Steps of migrating database:

1. Download and install 'Migrate DB' in your current environment.

2. Get URL and private key from target environment.

3. Click 'push', then input URL and private key of target environment.

4. If avbove steps are correct, WordPress will check whether target environment is available or not. If no mistakes, all the files will push to the target environment.
