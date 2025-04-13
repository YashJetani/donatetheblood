
pipeline {
    agent { label 'yash' }  // Runs on agent 'yash'

    stages {    
        stage('Clone Repository') {
            steps {
                sh "pwd"
                sh "rm -rf Blood-Donation-Management-System && git clone https://github.com/YashJetani/Blood-Donation-Management-System.git"
            }
        }

        stage('Build/Run') {
            steps {
                sh "cd Blood-Donation-Management-System && docker compose up --build -d"
           
            }
        }
        
        stage('Initialize Database') {
            steps {
                sh "docker exec -i mysql_db mysql < Blood-Donation-Management-System/init.sql"
            }
        }
    }
}
