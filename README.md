
# Joseph portfolio website

### Description
Personal portfolio website hosted on [Google Cloud with Cloud Run](https://joseph-portfolio-ugu2y6sala-as.a.run.app/ "Joseph portfolio") 


built with:
- Laravel
- ReactJS
- Tailwind CSS
- Tailwind Element
- Docker

### Feature
- **Responsive design**
- **InView JS for background color change**

### How to run locally
```
$ git https://github.com/chihong33/port-folio.git
$ cd portfolio
$ composer install
$ npm i
$ php artisan serve
$ npm run dev
```
### How to run with docker
```
$ docker build -t app .
$ docker run -d -p 80:80 app
```
