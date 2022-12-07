import { Controller, Get, Render } from '@nestjs/common';
import { AppService } from './app.service';

@Controller()
export class AppController {
  // constructor(private readonly appService: AppService) {}

  // @Get()
  // getHello(): string {
  //   return this.appService.getHello();
  // }

  @Get()
  @Render('index')
  root() {
    let dataUser = [
      {
        nama: 'Steve',
        kelas: 'IT',
        nilai: [80, 90, 100]
      },
      {
        nama: 'Rizqi',
        kelas: 'IT',
        nilai: [80, 90, 100]
      },
      {
        nama: 'Udin',
        kelas: 'IT',
        nilai: [80, 90, 100]
      },
      {
        nama: 'Asep',
        kelas: 'IT',
        nilai: {
          'mtk': 80,
          'indonesia': 90,
          'inggris': 85,
        }
      },
    ]
    return { 
      reviews: [
        `<div class="col-xl-4 col-md-6 col-sm-8">
          <div class="testimonial-card bg-white">
            <p> “You made it so simple. My new site is so much
              faster and easier to work with than my old site. I just choose the page, make the change and click save.
            </p>
            <div class="d-flex customer-identity">
              <div class="customer-img ">
                <img src="image/l3/client-img-2.png" alt="">
              </div>
              <div class="content-body">
                <h5>Cameron Anderson</h5>
                <p>Designer</p>
              </div>
            </div>
          </div>
        </div>`,
        `<div class="col-xl-4 col-md-6 col-sm-8">
          <div class="testimonial-card bg-white">
            <p> “You made it so simple. My new site is so much
              faster and easier to work with than my old site. I just choose the page, make the change and click save.
            </p>
            <div class="d-flex customer-identity">
              <div class="customer-img ">
                <img src="image/l3/client-img-2.png" alt="">
              </div>
              <div class="content-body">
                <h5>Cameron Anderson</h5>
                <p>Designer</p>
              </div>
            </div>
          </div>
        </div>`,
        `<div class="col-xl-4 col-md-6 col-sm-8">
          <div class="testimonial-card bg-white">
            <p> “You made it so simple. My new site is so much
              faster and easier to work with than my old site. I just choose the page, make the change and click save.
            </p>
            <div class="d-flex customer-identity">
              <div class="customer-img ">
                <img src="image/l3/client-img-2.png" alt="">
              </div>
              <div class="content-body">
                <h5>Cameron Anderson</h5>
                <p>Designer</p>
              </div>
            </div>
          </div>
        </div>`
      ],
      applications: [
        'image/l3/app-store.png',
        'image/l3/google-play.png'
      ],
      dataUser
     };
  }
}
