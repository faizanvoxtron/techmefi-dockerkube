# 🚀 PHP Kubernetes Deployment with Docker, Docker Hub & GitHub Actions

![GitHub Actions](https://img.shields.io/github/actions/workflow/status/your-repo/ci-cd-pipeline.yml?branch=main)  
![Docker](https://img.shields.io/badge/Docker-🛳️-blue)  
![Kubernetes](https://img.shields.io/badge/Kubernetes-☸️-blue)  
![CI/CD](https://img.shields.io/badge/CI%2FCD-GitHub%20Actions-%231877F2)  
![PHP](https://img.shields.io/badge/PHP-%23777BB4)  

---

## 🌟 Overview  
This project demonstrates a complete DevOps workflow for a **PHP-based application**:  
✅ PHP application Dockerized  
✅ Docker image pushed to Docker Hub  
✅ Kubernetes deployment using **Kubeadm** and **Ingress-NGINX Controller**  
✅ Fully automated CI/CD pipeline using **GitHub Actions**  

---

## 🏗️ Architecture  
```mermaid
graph TD;
    Code -->|Docker Build| Docker;
    Docker -->|Push| DockerHub;
    DockerHub -->|Pull| Kubernetes;
    Kubernetes -->|Deploy| Ingress-NGINX;
    GitHubActions -->|Trigger| DockerBuild;
