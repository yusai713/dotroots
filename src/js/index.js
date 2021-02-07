/*
	参考記事：
	https://qiita.com/KZ-taran/items/b4e5a5c20d1b1e02ed23#2-webpack%E3%81%AE%E5%87%A6%E7%90%86%E5%AF%BE%E8%B1%A1%E3%81%A8%E3%81%AA%E3%82%8Bjs%E3%83%95%E3%82%A1%E3%82%A4%E3%83%AB%E3%81%AE%E6%9B%B8%E3%81%8D%E6%96%B9
*/

//import totop from './totop';
//totop();
import slick from './external/slick';
slick();
import contactForm7 from './external/contact-form7';
contactForm7();
import drawer from './drawer';
drawer();
import fadein from './fadein';
$(window).scroll(function () {
	fadein();
});
console.log("おはよう！");
