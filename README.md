# RESPONSI #
## OVERVIEW PRAKTIK TEKNOLOGI CLOUD COMPUTING ##

### Docker: Fungsi dan Penerapannya ###

Docker merupakan software yang menyediakan virtualisasi selevel operating sistem yang disebut container. Dalam praktik teknologi cloud compting, penggunaan docker, terutama community edition (ED) yang biasa digunakan dalam proses pembelajaran, sebagian besar terfokus hal-hal berikut: 
* penggunaan image untuk menjalankan service melalui browser.
* membuat image berdasakan kebutuhan menggunakan dockerfile sebagai konfigurasi service dalam image yang akan dibuat.
* mengkombinasikan 2 atau lebih service untuk membuat sebuah service terpadu yang dapat berjalan menggunakan fungsi dari service-service yang dikombinasikan menggunakan docker compose.
* membuat dan mengatur cluster secara lokal, serta melakukan konfigurasi terhadap susunan nodes, mendeploy service, melakukan scaling up/down pada service yang berjalan pada nodes menggunakan docker engine dan docker swarm.

Dalam praktik, pembelajaran menggunakan docker meliputi 4 jenis fungsi docker seperti yang sudah disebutkan di atas, yaitu docker image, docker compose, docker machine, dan docker swarm.

**Docker Image**

Docker image digunakan untuk membuat dan mengkonfigurasi image yang merupakan bagian atau potongan sebagian hardisk yang menyimpan fungsi tertentu sebagai service. Untuk membuat image menggunakan docker diperlukan sebuah file dengan nama Dockerfile yang menyimpan pengaturan service yang akan dibuat imagenya. Selain dibuat menggunakan Dockerfile, image juga dapat didownload menggunakan perintah pull untuk mengambil image dari dockerhub.

**Docker Compose**

Docker compose digunakan untuk menggabunggakn 2 atau lebih service yang dijalankan menggunakan masing-masing image yang diperlukan untuk membuat sebuah service baru yang memiliki fungsi dari services yang digabungkan. Untuk menggabungkan service menggunakan docker compose diperlukan sebuah file dengan nama *docker-compose.yml* yang berisi konfigurasi services yang ingin dijalankan. Image yang diperlukan dalam pembuatan docker compose juga dicantumkan dalam file yml tersebut.

**Docker Machine**

Docker machine digunakan untuk menbuat docker engine pada host virtual. Docker machine dapat dijalankan, diinspect, di-stop, dan direstart menggunakan perintah docker-machine. Penggunaan docker machine ini akan diaplikasikan secara lanjut dalam docker swarm.

**Docker Swarm**

Docker swarm digunakan untuk memanajemen cluster secara lokal. Pada cluster terdapat nodes yang saling terhubung. Untuk membuat node adalah dengan mengggunakan docker machine. Docker engine yang dibuat dapat dibuat menjadi leader pada swarm atau digabungkan sebagai node pada swarm yang sudah ada. Pada sebuah swarm terdapat sebuah leader node yang berfungsi untuk memanajeman swarm dan beberapa worker nodes untuk membantu leader node menampung service yang akan dideploy.

**Minikube: Menjalankan Kubernetes Secara Lokal**

