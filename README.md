# Create a File Submission Web Application using Cloudant and PHP Boilerplate

## Learning Objectives
This guide shows you how can you create and deploy a PHP web application on IBM Cloud and connect and manage a Cloudant database instance on IBM Cloud.
You will also learn how to fetch the required data from cloudant using search index queries.

## Prerequisites
- An IBM Cloud Account. (You can create one here, and get 30 days free trial)
- IBM Cloud Command Line Interface
- GIT Command Line Interface

## Estimated Time
These steps will take you approximately 60 minutes.This does not include creating an IBM Cloud account(if you don’t have one) or downloading the IBM Cloud CLI. It includes 10 minutes for creating cloudant service and generating credentials. Creating and the initial starting of PHP Service instance takes 10 minutes. Cloning the sample code and doing the modifications can take you around 15-25 minutes. Deploying the code to the PHP Service using IBM Cloud CLI can take 10 minutes.

## Steps
In this guide you will perform following steps:
Create a Cloudant Service on IBM Cloud and generate credentials.
Creating Database and Search Index in Cloudant DB
Creating a PHP Service on IBM Cloud.
Cloning the sample from GitHub.
Making necessary modifications in the sample code before deployment.
Deploying local code to the PHP service using IBM Cloud CLI.

# Create a PHP Service
1. Go to **Catalog** from IBM Cloud homepage.
2. Select **Compute**.
3. Scroll down to **PHP** Service.
4. After giving suitable app name and hostname click **Create** button to create a PHP Service.
5. Once the service is running you can access it by clicking **Visit App URL**.

# Create Cloudant Service and Generating Credentials
1. Go to **Catalog** from IBM Cloud homepage.
2. Select **Databases**.
3. Click **Cloudant** tile.
4. After giving suitable Service Name, in available authentication methods select **Use both legacy credentials and IAM** and then click **Create** button below to create the DB instance.
5. Once the service is created you can access the Cloudant Dashboard by clicking LAUNCH CLOUDANT DASHBOARD button.
