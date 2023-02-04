@extends('publicUser.layouts.master')


@section('title')
Course
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('userSide/css/singlecoarse.css')}}">

@endsection



@section('content')
<section class="course-info">

    <div class="image">
        <img src="/userSide/img/1215970_a5f8_11.jpg" alt=""/>
    </div>
    <div class="info">
        <h1>The Comprehensive ETABS Professional Course (RCC and Steel)</h1>
        <p>instrector</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
        <p><i class="fa-solid fa-calendar"></i> 12-6-2022</p>
        <div>
            <a href="./cart.html" class="btn">Add to cart</a>
            <a href="./checkout.html" class="btn">Buy now</a>

        </div>

    </div>
</section>


<section>
    <div class="about" id="about">
        <!-- <h1 class="heading"><span>about</span>course</h1> -->
        <div class="row">
            <div class="content">
                <h3>Description</h3>
                <p>Steel Structures especially PEB are somewhat tricky to model, analyze and design. Majority of the people are comfortable in RCC Design, but very few are expert in Steel Design. After covering this section , you will be able to calculate wind and seismic loads as per the Indian Standards , Model the Steel Structures i.e. Portal , Plan Bracing and Elevation Bracing, Analyze ,</p>
                <!-- <a href="#" class="btn">learn more</a> -->
            </div>
            <div class="video-container">
                <video src="./video/SampleVideo_1280x720_20mb.mp4" controls></video>
                <!-- <h3>best courses</h3> -->
            </div>

        </div>
    </div>
</section>
<section>
    <div class="containerInfo">
        <div class="group">
            <img src="/userSide/img/time.png" alt="">
            <div class="info">
                <h3>The number of hours</h3>
                <p>30 hours</p>
            </div>
        </div>
        <div class="group">
            <img src="/userSide/img/user.png" alt="">
            <div class="info">
                <h3>Instructor</h3>
                <p>Guangshuai Han</p>
            </div>
        </div>
        <div class="group">
            <img src="/userSide/img/price.png" alt="">
            <div class="info">
                <h3>Price</h3>
                <p>$84.99</p>
            </div>
        </div>
        <div class="group">
            <img src="/userSide/img/category.png" alt="">
            <div class="info">
                <h3>Specialization</h3>
                <p>Civil Engineering</p>
            </div>
        </div>
    </div>
</section>
<section class="instructors">
    <h2 class="heading"><span style="color: #FF0000;">About</span> the instructors</h2>
    <div class="card">
        <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
                <img src="/userSide/img/user icon.png" alt="" class="card-img">

            </div>
        </div>
        <div class="card-content">
            <h2 class="name">Guangshuai Han</h2>
            <p class="description">Graduate Research Assistant at Purdue University</p>
            <a href="{{route('user.profile_engineer.index')}}"><button class="button">View more</button></a>

        </div>
    </div>
</section>
<section>
    <h2 class="heading"><span style="color: #FF0000;">Topic</span> courses</h2>
    <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-item-header">
            What is Web Development?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            What is HTML?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and anything that can be viewed in a web browser.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            What are some basic technical skills of a Front-End developer?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <ul style="padding-left: 1rem;">
                <li>HTML, CSS, JavaScript</li>
                <li>Frameworks (CSS and JavaScript frameworks)</li>
                <li>Responsive Design</li>
                <li>Version Control/Git</li>
                <li>Testing/Debugging</li>
                <li>Browser Developer Tools</li>
                <li>Web Performance</li>
                <li>SEO (Search Engine Optimization)</li>
                <!-- <li>CSS Preprocessing</li> -->
                <li>Command Line</li>
                <li>CMS (Content Management System)</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            What is HTTP?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and this protocol defines how messages are formatted and transmitted, and what actions Web servers and browsers should take in response to various commands.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            What is CORS?
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
            </div>
          </div>
        </div>
      </div>
</section>
<section>
    <div class="reviews" id="reviews">
        <h2 class="heading"><span style="color: #FF0000;">Clients</span> review</h2>
        <!-- <h1 class="heading">clients review</h1> -->
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div  class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="userSide/img/user icon.png" alt="">
                    <h3>mohammad alnuqeiti</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa laboriosam saepe numquam sequi accusamus tenetur?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>



            </div>
        </div>


        <div id="input">

            <input type="submit" id="comment" value="add comment">
        </div>
    </div>
    <div id="comment_section">

        <form>
            <label for="story">write comment:</label>
            <div >
                <textarea id="story" name="comment"rows="5" cols="33" >Comment...
                </textarea>
            </div>
            <div id="input">
              <input type="submit" id="submit">
            </div>
         </form>
    </div>
</section>
@endsection

@section('script')

@endsection
