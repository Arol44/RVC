// JavaScript Document
var bannerImg = new Array(); //creates the array for images
  
  
  bannerImg[0]="assets/images/banner/banner1.png"; // image 2
  bannerImg[1]="assets/images/banner/banner2.png";// image 3
  bannerImg[2]="assets/images/banner/banner3.png"; //image 1
  //bannerImg[3]="assets/images/banner/banner4.png";
  bannerImg[3]="assets/images/banner/banner5.png";
  //bannerImg[5]="assets/images/banner/banner6.png";

var newBanner = -1;  
var totalBan = bannerImg.length;

function cycleBan() { 
  newBanner++;
  if (newBanner == totalBan) { 
    newBanner = 0;
  }
  document.bannerpic.src=bannerImg[newBanner];

  setTimeout("cycleBan()", 7*1000); 
}
window.onload=cycleBan;