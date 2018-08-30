# Create a File Submission Web Application using Cloudant and PHP Boilerplate

## Learning Objectives
This guide shows you how can you create and deploy a PHP web application on IBM Cloud and connect and manage a Cloudant database instance on IBM Cloud.
You will also learn how to fetch the required data from Cloudant using search index queries.

## Prerequisites
- An IBM Cloud Account. (You can create one here, and get 30 days free trial)
- IBM Cloud Command Line Interface
- GIT Command Line Interface

## Estimated Time
These steps will take you approximately 60 minutes. This does not include creating an IBM Cloud account(if you don’t have one) or downloading the IBM Cloud CLI. It includes 10 minutes of creating Cloudant service and generating credentials. Creating and the initial starting of PHP Service instance takes 10 minutes. Cloning the sample code and doing the modifications can take you around 15-25 minutes. Deploying the code to the PHP Service using IBM Cloud CLI can take 10 minutes.

## Steps
In this guide you will perform the following steps:
Create a Cloudant Service on IBM Cloud and generate credentials.
Creating Database and Search Index in Cloudant DB
Creating a PHP Service on IBM Cloud.
Cloning the sample from GitHub.
Making necessary modifications in the sample code before deployment.
Deploying local code to the PHP service using IBM Cloud CLI.

# Create a PHP Service
1. Go to **Catalog** from IBM Cloud homepage.
![Go To Catalog](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss1.png)

2. Select **Compute**.
![Click Compute](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss2.png)

3. Scroll down to **PHP** Service.
![Find and Select PHP Service](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss3.png)

4. After giving suitable app name and hostname click **Create** button to create a PHP Service.
![Click Create Button](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss4.png)

5. Once the service is running you can access it by clicking **Visit App URL**.
![Click Visit App URL](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss5.png)

# Create Cloudant Service and Generating Credentials
1. Go to **Catalog** from IBM Cloud homepage.

2. Select **Databases**.
![Select Databases](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss6.png)

3. Click **Cloudant** tile.
![Click Cloudant](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss7.png)

4. After giving suitable Service Name, in available authentication methods select **Use both legacy credentials and IAM** and then click **Create** button below to create the DB instance.
![Click Create](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss8.png)

5. Once the service is created you can access the Cloudant Dashboard by clicking **LAUNCH CLOUDANT DASHBOARD** button.
![Launch Cloudant Dashboard](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss9.png)

6. For creating service credentials select **Service Credentials**.
![Select Service Credentials](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss10.png)

7. Click on **New Credentials** Button.
![Click New Credentials](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss11.png)

8. After giving the suitable name to credentials, click **Add** button. This will generate credentials with the given name which will be used later to communicate with the DB.

9. Go to **Manage** and **Launch Cloudant Dashboard**, this will take you to Cloudant dashboard. From here you can completely manage your database instance.
![Launch Cloudant Dashboard](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss12.png)

10. Go to **Databases**.
![Go To Databases](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss13.png)

  * You will not be able to see any databases there when you open it for the first time.
  * For this application we will be creating
  
11. Click **Create Database**.
![Create Database](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss14.png)

12. After giving a suitable name for database click **Create** button.
![Click Create](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss15.png)

13. Click on the database which you have created to open the database
![Go on Database Name](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss16.png)

14. Go to Plus Icon near **Design Documents** and Click **New Search Index**
![Click New Search Index](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss17.png)

15. After giving suitable name to design document and search index, create following function definition in Search index Function:
  ```
  function (doc) {
  index("username", doc.username);
  }
  ```
![Put Function Defination](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss18.png)

  * This creates a search index for the database. We will be using this search index to check if the username already exists in the DB or not.
  
16. Scroll down and click **Create Document and Build Index**
![Click Create Document and Build Index](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss19.png)

# Cloning Sample Repo
1. Accessing Git CLI
  - For Windows Users: Open Git CMD
  - For Linux and Mac Users: Open Terminal
2. Use the following command to clone the sample repository
  - $ git clone https://github.com/Ritwikjoshi/ibmcloudantsample
  
![Clone the Repository](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss20.png)  
  
# Modifying Sample Code
1. Open Credentials.php file in the cloned folder.
2. Replace Username, Password, Host and Database Name in the file.
3. Now, open the manifest.yml file located in the cloned folder and replace <YOUR APPLICATION NAME HERE> with your application name ( Name of the PHP Service you created in the beginning i.e “ibmsample”).
4. Running the code locally

# Deploying Application to IBM Cloud
1. Accessing IBM Cloud CLI
  - For Windows Users: Open Windows Command Prompt
  - For Linux and Mac Users: Open Terminal
2. For Confirming the installation of Ibmcloud CLI use the following command:
  ```
  $ ibmcloud -v
  ```
![Go To Catalog](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss21.png)

3. Log in to IBM Cloud
  ```
  $ ibmcloud login
  ```
  - Authenticate using IBM Cloud Username and Password.
4. Switch to the directory having sample code and run the following command there:
  ```
  $ ibmcloud app push
  ```
  - This uses the manifest.yml file in the folder to target the application and the organisation.
  - If you get an error saying “No CF API endpoint set”  use the following command to correct it:
  ```
  $ ibmcloud target --cf
  ```
  - After setting the API Endpoint repeat step 4.
5. Once the Pushing is complete you’ll see app status as running on your command line.
![Check Running Status](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss22.png)

* If you don't see the status as running then the push was not successful. In such a case, you need to repeat the **Step4**.
6. You can check access the running application through the endpoint shown in the status.
![Access the application through endpoint](https://github.com/Ritwikjoshi/ibmcloudantsample/blob/master/src/images/screenshots/ss23.png)

# Summary
In this how-to guide you learned how to:
- Creating PHP and Cloudant Services on IBM Cloud.
- Creating Database and Querying Cloudant DB using Search Index.
- Deploying application using IBM Cloud CLI.

# References
- [A Video on Getting Started to Cloudant](https://www.youtube.com/watch?v=BpQYOn8AVo0)
- [A IBM Cloudant Documentation](https://developer.ibm.com/clouddataservices/docs/cloudant/)

