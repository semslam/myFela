# FELAUI WEBPAGE

This repo contains a nodejs server which serves a static html page.

The repo is setup also to automatically build a docker image of the application on the trigger of a push on the master branch.

## Testing the docker file locally

To use the docker image to replicate the application on your local machine, do ensure you have docker installed (run `docker --version` on your terminal to confirm).  
Or you can download docker from **[here](https://docs.docker.com/docker-for-windows/install/ "Download Docker from here")**

After you have docker setup on your local machine, you can pull this application's image to your machine by running this code on your terminal: `docker pull myfela/felaui`

To confirm that the image is resident on your local machine, run this command: `docker images` and looking under the `REPOSITORY` column, you should see the name of the image just pulled.

Now to the fun part 💃💃💃  
To run the docker image, run this command: `docker run -d -p {your desired port-number}:3000 myfela/felaui`

Confirm that the container is running using the command: `docker container ls -a`

Lastly open your application on your browser by navigating to `http://localhost:{your desired port-number}`
