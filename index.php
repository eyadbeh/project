<?php
require "config.php";
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user_login WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
} else {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
  <title>Car's Specification</title>
  <!-- Files -->
  <link rel="stylesheet" href="css/index-style.css" />
  <link rel="stylesheet" href="css/code-style.css" />
</head>

<body>
  <header class="main">
    <nav style="z-index: 100000; transition:0.6s;" id="navbar">
      <div class="logo">
        <a href="home.php">
          <h1 style="color:white;">capstone</h1>
        </a>
      </div>
      <ul class="menu">
        <li><a href="home.php">HOME</a></li>
        <li><a href="products.php">PRODUCTS</a></li>
        <li><a href="cart/cart.php">CART</a></li>
        <li><a href="contact-form/contact-us.php">CONTACT US</a></li>
        <li class="username"> <a style="color:white;"> Hi, <?php echo $row["name"]; ?> </a> </li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </nav>
    <div class="article-header">
      <h3>Arduino Robot Car</h3>
    </div>
  </header>

  <section class="slideshow-container">
    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <img src="images/png_2.avif" class="w-100" alt="Sunset Over the City" />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="images/png_4.avif" class="w-100 alt=" Canyon at Nigh" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="images/png_3.avif" class="w-100 alt=" Cliff Above a Stormy Sea" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel wrapper -->
  </section>

  <section class="collapse-container">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            COMPONENTS AND SUPPLIES
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse w-60" aria-labelledby="flush-headingOne" data-mdb-parent="#accordionFlushExample">
          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657917679Arduino-Mega.pdf" class="collapse-item">
            <img src="images/collapse 1.jpg" class="img-thumbnail" alt="">
            <h4>Arduino Mega</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657917875MQ-5.pdf" class="collapse-item">
            <img src="images/collapse 2.png.png" class="img-thumbnail" alt="">
            <h4>Gas Sensor (mq-5)</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657917970HCSR04.pdf" class="collapse-item">
            <img src="images/collapse 3.png" class="img-thumbnail" alt="">
            <h4>Ultrasonic Distance Sensor </h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657918187HC-05%20Datasheet.pdf" class="collapse-item">
            <img src="images/collapse 4.png" class="img-thumbnail" alt="">
            <h4>HC-05 Bluetooth Module</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657920359lm35.pdf" class="collapse-item">
            <img src="images/collapse 5.png" class="img-thumbnail" alt="">
            <h4>Temperature sensor (LM35)</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657920474neo6%20gbs.pdf" class="collapse-item">
            <img src="images/collapse 6.png" class="img-thumbnail" alt="">
            <h4>Navigation NEO6 GPS Module</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657921146L298.pdf" class="collapse-item">
            <img src="images/collapse 7.jpg" class="img-thumbnail" alt="">
            <h4>Motor driver(L298N)</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657921224sg90_datasheet.pdf" class="collapse-item">
            <img src="images/collapse 8.jpg" class="img-thumbnail" alt="">
            <h4>Servo Motor</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657921389DCmotor.pdf" class="collapse-item">
            <img src="images/collapse 9.jpg" class="img-thumbnail" alt="">
            <h4>Dc Motors</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="http://localhost/ecommerce9/upload%20page/uploads/1507221657921495Breadboard%20Datasheet.pdf" class="collapse-item">
            <img src="images/collapse 12.jpg" class="img-thumbnail" alt="">
            <h4>Bread Board</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="#" class="collapse-item">
            <img src="images/collapse 10.jpg" class="img-thumbnail" alt="">
            <h4>wheels</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="#" class="collapse-item">
            <img src="images/collapse 11.jpg" class="img-thumbnail" alt="">
            <h4>Wire set</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="#" class="collapse-item">
            <img src="images/collapse 13.png" class="img-thumbnail" alt="">
            <h4>Reachargeable batteries</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>

          <a href="#" class="collapse-item">
            <img src="images/collapse 14.jpg" class="img-thumbnail" alt="">
            <h4>Battery Holder</h4>
            <button class="btn btn-primary">Download Datasheet</button>
          </a>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            APPS AND ONLINE SERVICES
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-mdb-parent="#accordionFlushExample">
          <div class="accordion-body">
            Arduino IDE and C# for the GUI Application
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            CODE
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-mdb-parent="#accordionFlushExample">
          <div class="container">
            <p class="language" id="language-copy" style="margin-bottom: 0;">Arduino Code</p>
            <div class="code-wrapper">
              <pre>
        <code id="code">
int ledPin= 13;
#define trig 11
#define echo 12
int distance=0,t=0;-
int input = A0; 
int reading ; 
int temp ; 
#define IN1 22
                  
#define IN2 23
                  
#define IN3 24
#define IN4 25
                  
#define ena 2
#define enb 3
                  
char c;
// Include the Servo library
#include <Servo.h> 
                    
// Declare the Servo pin
int servoPin = 50;

// Create a servo object
Servo Servo1;

int i=1; //counter for change speed
void setup() 
  {
    Servo1.attach(servoPin);
    pinMode(input , INPUT) ; 
    Serial.begin (9600);
    pinMode(ledPin, OUTPUT);
    pinMode(IN1,OUTPUT);
    pinMode(IN2,OUTPUT);
    pinMode(IN3,OUTPUT);
    pinMode(IN4,OUTPUT);
    pinMode(ena,OUTPUT);
    pinMode(enb,OUTPUT);
    pinMode(trig,OUTPUT);
    pinMode(echo,INPUT);
  }
    
void loop()
{
  // Make servo go to 0 degrees
  Servo1.write(0);
  delay(500);
  // Make servo go to 90 degrees
  Servo1.write(90);
  delay(500);
  // Make servo go to 180 degrees
  Servo1.write(180);
  delay(500);
  
  
  char c = Serial.read();
  // bool ultra()=false ;
  ultra();
  if(distance > 20 && c != 'o')
  {
    if( c == 'w')
    {
      forward();
      ultra();
    }
    else if ( c == 'd')
    {
      Tright();   
      ultra();
    }
    else if ( c == 'a')
    {
      Tleft();   
      ultra();
    }
    else if ( c == 's')
    {
      reverse();  
      
    }
    else if ( c == 'o')
    {
      off();   
      ultra();
    }
    } 
    else 
    {
      off();
    }
    
    if (c == 't')
    {
      tem();
    }
    else if (c == 'l')
    {
      ultraread();
    }
    else if (c == 'm')
    {
      digitalWrite(ledPin,HIGH);
      Serial.println("ok"); 
    }
    else if (c== 'n')
    {
      digitalWrite(ledPin,LOW);
      Serial.println(12);
    }
    
    
  }

void forward()
  {
    digitalWrite(IN1,LOW);
    digitalWrite(IN2,HIGH);
    digitalWrite(IN3,HIGH);
    digitalWrite(IN4,LOW);
    analogWrite(ena,100);
    analogWrite(enb,100);
    
  }

  void reverse()
  {
    
    digitalWrite(IN1,HIGH);
    digitalWrite(IN2,LOW);
    digitalWrite(IN3,LOW);
    digitalWrite(IN4,HIGH);
    analogWrite(ena,100);
    analogWrite(enb,100); 
    
  }

  void Tleft()
  {
    digitalWrite(IN1, HIGH);
    digitalWrite(IN2, LOW);
    digitalWrite(IN3, HIGH);
    digitalWrite(IN4, LOW);
    analogWrite(ena,100);
    analogWrite(enb,100);
  }

  void Tright()
  {
    digitalWrite(IN1,LOW);
    digitalWrite(IN2,HIGH);
    digitalWrite(IN3,LOW);
    digitalWrite(IN4,HIGH);
    analogWrite(ena,100);
    analogWrite(enb,100);
  }

void off()
  {
  digitalWrite(IN1,LOW);
  digitalWrite(IN2,LOW);
  digitalWrite(IN3,LOW);
  digitalWrite(IN4,LOW);
  analogWrite(ena,100);
  analogWrite(enb,100);
  }

void ultra()
  {
  digitalWrite(trig,LOW);
  delayMicroseconds(5);
  digitalWrite(trig,HIGH);
  delayMicroseconds(10);
  digitalWrite(trig,LOW);
  t=pulseIn(echo,HIGH);
  distance=t/57;//Distance = (Speed of Sound * Time/2) = t/(1/((350*0.0001)/2))                                
  }

void ultraread()
  {
                                    
  digitalWrite(trig,LOW);
  delayMicroseconds(5);
  digitalWrite(trig,HIGH);
  delayMicroseconds(10);
  digitalWrite(trig,LOW);
  t=pulseIn(echo,HIGH);
  distance=t/57;//Distance = (Speed of Sound * Time/2) = t/(1/((350*0.0001)/2))

Serial.println(distance);
  }

void tem()
  {
  reading  = analogRead(input);
  temp = (reading * (5.0/1024))*100 - 2.5 ; 
  Serial.println(temp); 
  }</code>
                </pre>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
            SCHEMATICS
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-mdb-parent="#accordionFlushExample">
          <div class="accordion-body schematis-img">
            <img src="images/collapse 15.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com" role="button"><i class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="#">capstone.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
  <script>
    window.onscroll = function() {
      myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
  <style>
    nav {
      backdrop-filter: brightness(0.6);
      position: fixed;
      top: 0;
      width: 100%;
      position: fixed;
      top: 0;
      width: 100%;
    }

    .article-header {
      margin-top: 8%;
    }
  </style>
</body>

</html>