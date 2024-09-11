<?php
/**
 * The template for displaying the footer
 *
 */

?>
<section class="contact-form-popup">
    <div class="contact-form-popup__badge" data-contact-form="true">
        Свяжитесь с нами
    </div>
    <div class="contact-form-popup__inner">
        <div class="contact-form-popup__close">
            <svg>
                <use href="#cf-close"></use>
            </svg>
        </div>
        <?=do_shortcode('[contact-form-7 id="99e0372" title="Контактная форма 1"]')?>
    </div>
</section>
<footer class="footer">
   <div class="container">
         <div>
            <svg>
               <use href="#potoki"></use>
             </svg>
             <div>© АО «Потоки», 2024 г. </div>
         </div>
         <div>
            <div class="footer__menu">
            <a href="">Пользовательское соглашение </a>
            <a href="">Политика по обработке данных </a>
            <a href="">Политика конфиденциальности </a>
            </div>
         </div>
         <div>
            <div class="footer__contacts">
            <a href="mailto:inbox@potoki.ru">inbox@potoki.ru</a>
            <a href="tel:+78124002020">+7 (812) 400-20-20</a>
            <p>188354, Ленинградская обл.,<br>
               Гатчинский р-н, дер. Малое <br> Верево, Киевское ш., д. 18б
            </p>
            </div>
            <div class="footer__potoki-right">
               <svg>
                  <use href="#potoki_menu"></use>
               </svg>
            </div>
         </div>
   </div>
</footer>

<div class="preloader">
      <div id="container"></div>
</div>




<?php wp_footer(); ?>
<svg style="display:none">
   <symbol id="blue_arrow" viewBox="0 0 36 36" fill="none">
      <path d="M34 2L2 34" stroke="#00AFC5" stroke-width="3"/>
      <path d="M3 2H34V34" stroke="#00AFC5" stroke-width="3"/>
   </symbol>
   <symbol id="potoki" viewBox="0 0 228 23" fill="none" preserveAspectRatio="xMinYMid">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M122.977 22.6545C123.621 22.7185 129.341 22.6545 130.146 22.6545H140.971C143.327 22.6545 145.784 22.6226 147.745 21.1997C148.286 20.8 148.695 20.3043 149.09 19.6808C149.588 18.9134 149.939 17.9382 150.188 16.9469C150.729 14.8366 150.802 11.9268 150.7 9.70452C150.539 6.31513 149.88 2.47809 146.955 1.00722C145.784 0.415679 144.57 0.159877 143.239 0.127901L141.937 0.0799383C141.878 0.0799383 141.79 0.0799383 141.717 0.0799383L141.513 0.0319753H123.387C123.285 0.095926 122.451 0.0799383 122.261 0.0799383C121.09 0.143889 120.139 0.20784 119.042 0.543581C117.726 0.943273 116.716 1.67871 116.043 2.59C114.536 4.68439 114.112 7.77001 114.112 11.0795C114.112 15.0124 114.419 18.9294 117.009 21.1357C117.843 21.8551 119.51 22.4147 120.622 22.4947L122.304 22.6385C122.524 22.6545 122.743 22.6385 122.977 22.6545ZM97.1716 22.6545C97.2887 22.2388 97.2155 15.6999 97.2155 14.7087C97.2155 12.0387 97.2155 9.35279 97.2155 6.68285C97.5666 6.63488 109.84 6.65087 111.523 6.66686L111.83 6.63488C112.049 6.52297 111.771 6.71482 111.903 6.57093C111.991 6.41106 111.976 0.511605 111.903 0.0799383C110.484 -5.95587e-09 108.89 0.0639507 107.456 0.0639507C100.068 0.0639507 92.6805 0.0639507 85.3074 0.0639507C84.3565 0.0639507 76.7201 -0.0159877 76.5006 0.111914C76.4129 0.20784 76.4275 6.49099 76.5006 6.57093C76.6031 6.71482 79.7191 6.63488 80.114 6.63488C83.8006 6.63488 87.5018 6.63488 91.1883 6.63488C91.1883 8.24964 91.1152 22.3188 91.2176 22.5746C91.3346 22.7185 93.8215 22.6385 94.158 22.6385C95.1382 22.6545 96.1915 22.6865 97.1716 22.6545ZM6.03208 22.6545C6.13449 22.063 6.07597 15.4761 6.07597 14.7087C6.07597 12.0227 6.07597 9.35279 6.07597 6.66686H27.9319V21.6793C27.9319 21.9671 27.8588 22.4467 27.9904 22.6545H33.7689C34.1054 22.6066 33.5056 22.7185 33.8421 22.6385C33.8567 22.6385 33.8713 22.6385 33.8713 22.6226C33.8713 22.6066 33.9006 22.6066 33.9006 22.6066C34.0469 22.3508 33.9591 21.6313 33.9591 21.2636V5.67562C33.9591 5.11605 34.0323 0.239815 33.886 0.111914L33.8128 0.095926C33.5934 0.0319753 34.0615 0.111914 33.7689 0.0799383H8.50441C7.71443 0.0799383 0.209684 0 0.0780221 0.143889C0.0341347 0.20784 0.0633929 0.095926 0.0341347 0.27179C0.0195055 0.319753 0.0195055 0.383704 0.0195055 0.447655C-0.0243819 3.98093 0.0195055 7.81797 0.0195055 11.3672C0.0195055 12.4064 -0.039011 22.4467 0.0780221 22.5906C0.151168 22.6705 0.0487638 22.6066 0.165797 22.6545L0.414492 22.6705C1.33613 22.6545 2.60886 22.6865 3.76456 22.6865H4.94953C5.35914 22.6865 5.7395 22.6705 6.03208 22.6545ZM160.443 22.6385C160.457 22.4627 160.487 22.3827 160.487 22.1269V18.0021C160.75 17.9382 161.13 17.7783 161.408 17.6824C161.686 17.5864 161.964 17.4745 162.286 17.3466C165.753 16.0516 169.41 14.7886 172.819 13.4616L174.589 12.8221C174.648 12.8701 174.618 12.8381 174.677 12.918L176.93 15.9077C177.091 16.1156 177.222 16.2914 177.383 16.5153L179.241 18.9774C179.343 19.1213 179.387 19.1852 179.49 19.2971C179.578 19.425 179.607 19.473 179.709 19.6009L182.094 22.6545L189.364 22.6705C189.906 22.6545 189.481 22.2069 189.247 21.9031L186.921 18.8175C186.643 18.4658 186.439 18.146 186.146 17.7943L180.733 10.5519C181.45 10.344 184.361 9.2089 185.195 8.92112C185.532 8.79322 189.408 7.41828 189.628 7.2584C189.701 5.9634 189.628 2.51006 189.642 0.783396C189.642 0.463642 189.745 0.0799384 189.438 0.095926C189.13 0.159877 184.537 1.91852 183.952 2.12636C182.182 2.76587 180.353 3.5013 178.539 4.14081C177.881 4.38062 177.354 4.60445 176.725 4.82828L173.126 6.17124C172.468 6.41106 171.927 6.63488 171.312 6.85871C168.386 7.88192 165.285 9.14495 162.301 10.2161L160.516 10.8876C160.516 9.06501 160.516 7.24241 160.516 5.43581C160.516 3.69315 160.589 1.79062 160.472 0.127901C159.55 0.0319753 156.273 0.127901 154.854 0.111914C154.401 0.111914 154.459 0.143889 154.459 0.767408V21.3116C154.459 21.6633 154.357 22.4307 154.518 22.6385L154.576 22.6705C154.591 22.6705 154.606 22.6865 154.606 22.6865L157.458 22.7025C157.897 22.7025 158.409 22.7185 158.921 22.7345H159.77C159.989 22.6705 160.223 22.6705 160.443 22.6385ZM198.844 22.6545C198.976 22.1429 198.888 18.8335 198.888 18.0021C199.093 17.9062 199.4 17.8103 199.605 17.7303L210.416 13.7334C212.332 13.03 214.263 12.2785 216.18 11.607L220.51 10.0083C220.949 9.8484 221.534 9.5926 221.958 9.48069V21.8551C221.958 22.031 221.944 22.3028 221.958 22.4467C221.973 22.7185 222.104 22.6545 222.368 22.6545H226.903C227.034 22.6545 227.21 22.6705 227.386 22.6865H227.62C227.781 22.6705 227.912 22.6545 228 22.5746V0.143889C227.766 -0.047963 225.484 0.0639507 225.016 0.0639507C224.577 0.0639507 222.192 -0.0159877 222.002 0.111914C221.9 0.367716 221.973 1.82259 221.973 2.22229C221.007 2.55803 220.027 2.97371 219.062 3.30945C218.096 3.64519 217.131 4.04488 216.194 4.38062C210.416 6.50698 204.623 8.72927 198.903 10.8396C198.903 9.01705 198.903 7.19445 198.903 5.38784C198.903 4.55649 198.961 0.543581 198.859 0.0799383C198.8 0.0799383 193.227 0.0159877 192.992 0.0799383C192.89 0.111914 192.89 0.111914 192.861 0.223827C192.817 0.415679 192.846 18.2739 192.846 19.7927C192.846 20.2084 192.773 22.3987 192.905 22.5746C193.022 22.7185 193.402 22.6545 193.578 22.6545C194.411 22.6545 195.67 22.6705 196.811 22.6865H197.44C197.981 22.6865 198.478 22.6705 198.844 22.6545ZM65.5288 22.6385L66.626 22.5746C70.8245 22.4147 73.0335 20.6561 73.9259 16.0037C74.4379 13.3017 74.3794 8.93711 73.8528 6.23519C73.648 5.21198 73.3261 4.26871 72.858 3.3734C72.1412 1.99846 71.0147 1.02321 69.4201 0.527593C68.3961 0.20784 67.3135 0.095926 66.2164 0.0639507C66.0262 0.0639507 65.1484 0.0639507 65.046 0H46.9059C46.7889 0.0639507 46.6133 0.047963 46.4817 0.0319753C45.2821 0.0159877 43.0438 0.191852 42.0783 0.671482C41.8442 0.783396 41.6394 0.863334 41.42 0.975248C40.9372 1.23105 40.4544 1.5508 40.0595 1.96648C40.0009 2.03043 39.9278 2.11037 39.8547 2.2063C39.723 2.35019 39.723 2.35019 39.6352 2.47809L39.0793 3.34142C38.6697 4.07686 38.2454 5.25994 38.0699 6.18723C37.8943 7.17846 37.6749 8.63334 37.6603 9.68853C37.6457 12.3105 37.5286 14.229 38.1723 16.9309C38.9769 20.2884 40.8494 22.063 43.9654 22.4627C46.1598 22.7345 48.7199 22.6385 51.0459 22.6385C54.6593 22.6385 58.2581 22.6385 61.8715 22.6385C62.4128 22.6385 63.0272 22.6545 63.627 22.6705H64.7096C65.0021 22.6705 65.2655 22.6705 65.5288 22.6385ZM43.6729 10.8077C43.6729 12.1506 43.6582 13.8613 44.4336 14.9804C45.0334 15.8278 46.072 16.0676 47.0814 16.0676H64.8705C65.3386 16.0676 66.0993 15.9557 66.5089 15.7958C68.1328 15.1723 68.323 13.0619 68.323 11.2553C68.323 9.54464 68.0596 7.45025 66.3919 6.89069C66.0116 6.76278 65.0607 6.65087 64.5779 6.65087H47.3594C46.8766 6.65087 46.0867 6.7468 45.677 6.85871C45.1797 6.98661 44.8432 7.27439 44.5067 7.64211C44.2141 7.97785 44.024 8.4255 43.8923 8.98507C43.8045 9.41674 43.6729 10.344 43.6729 10.8077ZM120.154 10.8556C120.154 12.3105 120.125 14.1171 121.061 15.1883C121.222 15.3642 121.632 15.6679 121.866 15.7798C122.144 15.9077 123.065 16.0676 123.387 16.0676H141.469C141.893 16.0676 142.771 15.9077 143.092 15.7479C144.087 15.2842 144.482 14.277 144.658 13.1419C144.775 12.3425 144.819 10.9516 144.716 10.1362C144.614 9.27285 144.453 8.07377 143.751 7.48223C143.487 7.2584 143.4 7.06655 142.8 6.8747C142.39 6.7468 141.483 6.65087 141.015 6.65087H123.811C122.085 6.65087 120.827 7.09853 120.373 9.01705C120.256 9.49668 120.154 10.2641 120.154 10.8556Z" fill="white"/>
   </symbol>
   <symbol id="buter_btn_icon" viewBox="0 0 44 27" fill="none">
      <line y1="25.5" x2="44" y2="25.5" stroke="white" stroke-width="3"/>
      <line y1="1.5" x2="44" y2="1.5" stroke="white" stroke-width="3"/>
   </symbol>
   <symbol  id="cf-close" viewBox="0 0 32 31" fill="none">
      <line x1="6.35355" y1="5.64645" x2="26.3536" y2="25.6464" stroke="#00AFC5"/>
      <line x1="5.64645" y1="25.6464" x2="25.6464" y2="5.64645" stroke="#00AFC5"/>
      <rect x="0.5" y="0.5" width="31" height="30" rx="4.5" stroke="#00AFC5"/>
   </symbol>
   <symbol id="potoki_vertical_top" viewBox="0 0 86 875" fill="none">
      <g style="mix-blend-mode:plus-lighter" opacity="0.3">
         <path fill-rule="evenodd" clip-rule="evenodd" d="M84.776 402.773C85.0153 400.304 84.776 378.367 84.776 375.282L84.776 333.764C84.776 324.732 84.6563 315.306 79.3316 307.788C77.836 305.712 75.9813 304.141 73.648 302.627C70.7763 300.719 67.1268 299.372 63.4175 298.419C55.5202 296.343 44.6315 296.062 36.3155 296.455C23.632 297.072 9.27331 299.597 3.76916 310.818C1.55553 315.306 0.598284 319.963 0.478628 325.068L0.299145 330.062C0.299145 330.286 0.299145 330.623 0.299145 330.903L0.119661 331.689L0.119661 401.202C0.358972 401.595 0.299144 404.792 0.299144 405.522C0.538455 410.01 0.777766 413.657 2.03415 417.865C3.52984 422.914 6.28192 426.785 9.69211 429.366C17.5295 435.145 29.0763 436.772 41.4607 436.772C56.1783 436.772 70.8361 435.594 79.0923 425.663C81.7846 422.465 83.8786 416.069 84.1777 411.806L84.7161 405.354C84.776 404.512 84.7161 403.67 84.776 402.773ZM84.776 501.741C83.2204 501.292 58.7509 501.572 55.0416 501.572C45.0503 501.572 34.9993 501.572 25.008 501.572C24.8285 500.226 24.8884 453.154 24.9482 446.702L24.8285 445.524C24.4097 444.683 25.1277 445.749 24.5892 445.244C23.9909 444.907 1.91449 444.963 0.299144 445.244C4.60079e-06 450.686 0.239316 456.801 0.239316 462.299C0.239315 490.632 0.239315 518.965 0.239315 547.241C0.239315 550.888 -0.0598246 580.174 0.418798 581.016C0.777764 581.353 24.2901 581.297 24.5892 581.016C25.1277 580.623 24.8285 568.673 24.8285 567.158C24.8285 553.02 24.8285 538.826 24.8285 524.687C30.8711 524.687 83.5196 524.968 84.4768 524.575C85.0153 524.126 84.7161 514.589 84.7161 513.298C84.776 509.539 84.8956 505.5 84.776 501.741ZM84.776 851.27C82.5623 850.878 57.9133 851.102 55.0416 851.102C44.9905 851.102 34.9993 851.102 24.9482 851.102L24.9482 767.282L81.1265 767.282C82.2034 767.282 83.9982 767.563 84.776 767.058L84.776 744.897C84.5965 743.606 85.0153 745.907 84.7161 744.616C84.7161 744.56 84.7161 744.504 84.6563 744.504C84.5965 744.504 84.5965 744.392 84.5965 744.392C83.6392 743.831 80.947 744.167 79.5709 744.167L21.2389 744.167C19.1449 744.167 0.897418 743.887 0.418796 744.448L0.358968 744.728C0.119657 745.57 0.418796 743.775 0.29914 744.897L0.299139 841.789C0.299139 844.818 8.77399e-09 873.6 0.53845 874.105C0.777761 874.273 0.358967 874.161 1.01707 874.273C1.19656 874.329 1.43587 874.329 1.67518 874.329C14.8971 874.498 29.2558 874.329 42.5376 874.329C46.4264 874.329 83.9982 874.554 84.5367 874.105C84.8358 873.824 84.5965 874.217 84.776 873.768L84.8358 872.814C84.776 869.28 84.8956 864.399 84.8956 859.967L84.8956 855.422C84.8956 853.851 84.8358 852.392 84.776 851.27ZM84.7161 259.09C84.058 259.034 83.7589 258.921 82.8017 258.921L67.3661 258.921C67.1268 257.911 66.5285 256.453 66.1695 255.387C65.8106 254.321 65.3918 253.255 64.9132 252.021C60.0671 238.724 55.3407 224.698 50.375 211.625L47.9819 204.837C48.1614 204.612 48.0417 204.725 48.3409 204.5L59.5287 195.86C60.3064 195.243 60.9645 194.738 61.8021 194.121L71.0156 186.996C71.554 186.603 71.7934 186.435 72.2121 186.042C72.6908 185.705 72.8702 185.593 73.3489 185.2L84.776 176.055L84.8358 148.171C84.776 146.096 83.1008 147.723 81.9641 148.62L70.4173 157.541C69.1011 158.607 67.9045 159.392 66.5883 160.514L39.4863 181.273C38.7086 178.524 34.4608 167.359 33.3839 164.161C32.9053 162.871 27.7601 148.003 27.1618 147.162C22.3158 146.881 9.39297 147.162 2.93157 147.105C1.73501 147.105 0.299147 146.713 0.358975 147.891C0.598286 149.069 7.17934 166.686 7.9571 168.93C10.3502 175.719 13.1023 182.732 15.4954 189.689C16.3928 192.213 17.2304 194.233 18.068 196.646L23.0935 210.447C23.9909 212.972 24.8285 215.048 25.6661 217.404C29.4951 228.625 34.2215 240.519 38.23 251.964L40.7427 258.809C33.9224 258.809 27.102 258.809 20.3415 258.809C13.8202 258.809 6.70072 258.529 0.478629 258.977C0.119662 262.512 0.478629 275.079 0.418801 280.521C0.418801 282.261 0.538457 282.036 2.87174 282.036L79.7504 282.036C81.0667 282.036 83.9384 282.429 84.7161 281.812L84.8358 281.587C84.8358 281.531 84.8956 281.475 84.8956 281.475L84.9555 270.535C84.9555 268.852 85.0153 266.888 85.0751 264.925L85.0751 261.67C84.8358 260.829 84.8358 259.931 84.7161 259.09ZM84.776 111.816C82.8615 111.311 70.4771 111.648 67.3661 111.648C67.0071 110.862 66.6482 109.684 66.349 108.898L51.3921 67.4374C48.7597 60.0878 45.9477 52.6819 43.435 45.3323L37.4522 28.7255C36.8539 27.0424 35.8967 24.7982 35.4779 23.1711L81.7846 23.1711C82.4427 23.1711 83.4598 23.2272 83.9982 23.1711C85.0153 23.115 84.776 22.6101 84.776 21.6002L84.776 4.20783C84.776 3.70288 84.8358 3.02973 84.8956 2.35651L84.8956 1.4588C84.8358 0.841676 84.776 0.336671 84.4768 1.10101e-06L0.53846 7.01777e-09C-0.179474 0.897705 0.239321 9.65002 0.239321 11.4454C0.239321 13.1285 -0.0598185 22.2734 0.418804 23.0028C1.37605 23.3956 6.82038 23.1151 8.31607 23.1151C9.57245 26.8179 11.128 30.5768 12.3844 34.2797C13.6407 37.9826 15.1364 41.6855 16.3928 45.2762C24.3499 67.4374 32.666 89.6547 40.5632 111.591C33.7429 111.591 26.9225 111.591 20.162 111.591C17.0509 111.591 2.03415 111.367 0.299147 111.76C0.299147 111.984 0.0598359 133.36 0.299147 134.258C0.418803 134.65 0.418803 134.65 0.837597 134.763C1.55553 134.931 68.3832 134.819 74.0668 134.819C75.6223 134.819 83.8187 135.099 84.4768 134.594C85.0153 134.145 84.776 132.687 84.776 132.013C84.776 128.815 84.8358 123.991 84.8956 119.614L84.8956 117.202C84.8956 115.126 84.8358 113.219 84.776 111.816ZM84.7161 623.094L84.4768 618.886C83.8786 602.784 77.2975 594.313 59.8876 590.89C49.7767 588.927 33.4437 589.151 23.3328 591.171C19.5039 591.956 15.974 593.191 12.6237 594.986C7.47847 597.735 3.82898 602.055 1.97432 608.171C0.777764 612.098 0.358969 616.25 0.239314 620.457C0.239314 621.187 0.239314 624.553 2.72177e-06 624.946L1.96272e-06 694.515C0.239313 694.964 0.179485 695.637 0.119658 696.142C0.0598297 700.743 0.717935 709.327 2.51277 713.029C2.93156 713.927 3.2307 714.713 3.6495 715.554C4.60674 717.406 5.8033 719.257 7.35882 720.772C7.59813 720.996 7.89727 721.277 8.25624 721.557C8.79469 722.062 8.79469 722.062 9.27331 722.399L12.504 724.531C15.2561 726.102 19.6833 727.729 23.1534 728.402C26.8627 729.075 32.307 729.917 36.2556 729.973C46.0674 730.029 53.2467 730.478 63.3576 728.009C75.9215 724.924 82.5623 717.742 84.058 705.792C85.0751 697.376 84.7161 687.558 84.7161 678.637C84.7161 664.78 84.7161 650.978 84.7161 637.12C84.7161 635.044 84.776 632.688 84.8358 630.388L84.8358 626.236C84.8358 625.114 84.8358 624.104 84.7161 623.094ZM40.4436 706.914C45.4691 706.914 51.8707 706.97 56.0586 703.997C59.2295 701.696 60.1269 697.713 60.1269 693.842L60.1269 625.619C60.1269 623.824 59.7081 620.906 59.1099 619.335C56.7766 613.108 48.8793 612.378 42.1188 612.378C35.7172 612.378 27.8797 613.388 25.7858 619.784C25.3072 621.243 24.8884 624.89 24.8884 626.741L24.8884 692.776C24.8884 694.627 25.2473 697.657 25.6661 699.228C26.1447 701.135 27.2216 702.426 28.5977 703.716C29.8541 704.838 31.5292 705.568 33.6232 706.072C35.2386 706.409 38.7086 706.914 40.4436 706.914ZM40.6231 413.601C46.0674 413.601 52.8279 413.713 56.8364 410.122C57.4945 409.505 58.6312 407.934 59.05 407.037C59.5287 405.971 60.1269 402.436 60.1269 401.202L60.1269 331.857C60.1269 330.23 59.5287 326.864 58.9304 325.629C57.1954 321.814 53.4262 320.299 49.1784 319.626C46.1871 319.177 40.982 319.009 37.9308 319.402C34.7001 319.794 30.213 320.412 27.9994 323.105C27.1618 324.115 26.4439 324.451 25.726 326.751C25.2473 328.322 24.8884 331.801 24.8884 333.596L24.8884 399.575C24.8884 406.195 26.5635 411.02 33.7429 412.759C35.5377 413.208 38.4094 413.601 40.6231 413.601Z" fill="white"/>
      </g>
   </symbol>
   <symbol  id="potoki_vertical_top_2" viewBox="0 0 86 875" fill="none">
      <g style="mix-blend-mode:plus-lighter" opacity="0.3">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M84.776 402.773C85.0153 400.304 84.776 378.367 84.776 375.282L84.776 333.764C84.776 324.732 84.6563 315.306 79.3316 307.788C77.836 305.712 75.9813 304.141 73.648 302.627C70.7763 300.719 67.1268 299.372 63.4175 298.419C55.5202 296.343 44.6315 296.062 36.3155 296.455C23.632 297.072 9.27331 299.597 3.76916 310.818C1.55553 315.306 0.598284 319.963 0.478628 325.068L0.299145 330.062C0.299145 330.286 0.299145 330.623 0.299145 330.903L0.119661 331.689L0.119661 401.202C0.358972 401.595 0.299144 404.792 0.299144 405.522C0.538455 410.01 0.777766 413.657 2.03415 417.865C3.52984 422.914 6.28192 426.785 9.69211 429.366C17.5295 435.145 29.0763 436.772 41.4607 436.772C56.1783 436.772 70.8361 435.594 79.0923 425.663C81.7846 422.465 83.8786 416.069 84.1777 411.806L84.7161 405.354C84.776 404.512 84.7161 403.67 84.776 402.773ZM84.776 501.741C83.2204 501.292 58.7509 501.572 55.0416 501.572C45.0503 501.572 34.9993 501.572 25.008 501.572C24.8285 500.226 24.8884 453.154 24.9482 446.702L24.8285 445.524C24.4097 444.683 25.1277 445.749 24.5892 445.244C23.9909 444.907 1.91449 444.963 0.299144 445.244C4.60079e-06 450.686 0.239316 456.801 0.239316 462.299C0.239315 490.632 0.239315 518.965 0.239315 547.241C0.239315 550.888 -0.0598246 580.174 0.418798 581.016C0.777764 581.353 24.2901 581.297 24.5892 581.016C25.1277 580.623 24.8285 568.673 24.8285 567.158C24.8285 553.02 24.8285 538.826 24.8285 524.687C30.8711 524.687 83.5196 524.968 84.4768 524.575C85.0153 524.126 84.7161 514.589 84.7161 513.298C84.776 509.539 84.8956 505.5 84.776 501.741ZM84.776 851.27C82.5623 850.878 57.9133 851.102 55.0416 851.102C44.9905 851.102 34.9993 851.102 24.9482 851.102L24.9482 767.282L81.1265 767.282C82.2034 767.282 83.9982 767.563 84.776 767.058L84.776 744.897C84.5965 743.606 85.0153 745.907 84.7161 744.616C84.7161 744.56 84.7161 744.504 84.6563 744.504C84.5965 744.504 84.5965 744.392 84.5965 744.392C83.6392 743.831 80.947 744.167 79.5709 744.167L21.2389 744.167C19.1449 744.167 0.897418 743.887 0.418796 744.448L0.358968 744.728C0.119657 745.57 0.418796 743.775 0.29914 744.897L0.299139 841.789C0.299139 844.818 8.77399e-09 873.6 0.53845 874.105C0.777761 874.273 0.358967 874.161 1.01707 874.273C1.19656 874.329 1.43587 874.329 1.67518 874.329C14.8971 874.498 29.2558 874.329 42.5376 874.329C46.4264 874.329 83.9982 874.554 84.5367 874.105C84.8358 873.824 84.5965 874.217 84.776 873.768L84.8358 872.814C84.776 869.28 84.8956 864.399 84.8956 859.967L84.8956 855.422C84.8956 853.851 84.8358 852.392 84.776 851.27ZM84.7161 259.09C84.058 259.034 83.7589 258.921 82.8017 258.921L67.3661 258.921C67.1268 257.911 66.5285 256.453 66.1695 255.387C65.8106 254.321 65.3918 253.255 64.9132 252.021C60.0671 238.724 55.3407 224.698 50.375 211.625L47.9819 204.837C48.1614 204.612 48.0417 204.725 48.3409 204.5L59.5287 195.86C60.3064 195.243 60.9645 194.738 61.8021 194.121L71.0156 186.996C71.554 186.603 71.7934 186.435 72.2121 186.042C72.6908 185.705 72.8702 185.593 73.3489 185.2L84.776 176.055L84.8358 148.171C84.776 146.096 83.1008 147.723 81.9641 148.62L70.4173 157.541C69.1011 158.607 67.9045 159.392 66.5883 160.514L39.4863 181.273C38.7086 178.524 34.4608 167.359 33.3839 164.161C32.9053 162.871 27.7601 148.003 27.1618 147.162C22.3158 146.881 9.39297 147.162 2.93157 147.105C1.73501 147.105 0.299147 146.713 0.358975 147.891C0.598286 149.069 7.17934 166.686 7.9571 168.93C10.3502 175.719 13.1023 182.732 15.4954 189.689C16.3928 192.213 17.2304 194.233 18.068 196.646L23.0935 210.447C23.9909 212.972 24.8285 215.048 25.6661 217.404C29.4951 228.625 34.2215 240.519 38.23 251.964L40.7427 258.809C33.9224 258.809 27.102 258.809 20.3415 258.809C13.8202 258.809 6.70072 258.529 0.478629 258.977C0.119662 262.512 0.478629 275.079 0.418801 280.521C0.418801 282.261 0.538457 282.036 2.87174 282.036L79.7504 282.036C81.0667 282.036 83.9384 282.429 84.7161 281.812L84.8358 281.587C84.8358 281.531 84.8956 281.475 84.8956 281.475L84.9555 270.535C84.9555 268.852 85.0153 266.888 85.0751 264.925L85.0751 261.67C84.8358 260.829 84.8358 259.931 84.7161 259.09ZM84.776 111.816C82.8615 111.311 70.4771 111.648 67.3661 111.648C67.0071 110.862 66.6482 109.684 66.349 108.898L51.3921 67.4374C48.7597 60.0878 45.9477 52.6819 43.435 45.3323L37.4522 28.7255C36.8539 27.0424 35.8967 24.7982 35.4779 23.1711L81.7846 23.1711C82.4427 23.1711 83.4598 23.2272 83.9982 23.1711C85.0153 23.115 84.776 22.6101 84.776 21.6002L84.776 4.20783C84.776 3.70288 84.8358 3.02973 84.8956 2.35651L84.8956 1.4588C84.8358 0.841676 84.776 0.336671 84.4768 1.10101e-06L0.53846 7.01777e-09C-0.179474 0.897705 0.239321 9.65002 0.239321 11.4454C0.239321 13.1285 -0.0598185 22.2734 0.418804 23.0028C1.37605 23.3956 6.82038 23.1151 8.31607 23.1151C9.57245 26.8179 11.128 30.5768 12.3844 34.2797C13.6407 37.9826 15.1364 41.6855 16.3928 45.2762C24.3499 67.4374 32.666 89.6547 40.5632 111.591C33.7429 111.591 26.9225 111.591 20.162 111.591C17.0509 111.591 2.03415 111.367 0.299147 111.76C0.299147 111.984 0.0598359 133.36 0.299147 134.258C0.418803 134.65 0.418803 134.65 0.837597 134.763C1.55553 134.931 68.3832 134.819 74.0668 134.819C75.6223 134.819 83.8187 135.099 84.4768 134.594C85.0153 134.145 84.776 132.687 84.776 132.013C84.776 128.815 84.8358 123.991 84.8956 119.614L84.8956 117.202C84.8956 115.126 84.8358 113.219 84.776 111.816ZM84.7161 623.094L84.4768 618.886C83.8786 602.784 77.2975 594.313 59.8876 590.89C49.7767 588.927 33.4437 589.151 23.3328 591.171C19.5039 591.956 15.974 593.191 12.6237 594.986C7.47847 597.735 3.82898 602.055 1.97432 608.171C0.777764 612.098 0.358969 616.25 0.239314 620.457C0.239314 621.187 0.239314 624.553 2.72177e-06 624.946L1.96272e-06 694.515C0.239313 694.964 0.179485 695.637 0.119658 696.142C0.0598297 700.743 0.717935 709.327 2.51277 713.029C2.93156 713.927 3.2307 714.713 3.6495 715.554C4.60674 717.406 5.8033 719.257 7.35882 720.772C7.59813 720.996 7.89727 721.277 8.25624 721.557C8.79469 722.062 8.79469 722.062 9.27331 722.399L12.504 724.531C15.2561 726.102 19.6833 727.729 23.1534 728.402C26.8627 729.075 32.307 729.917 36.2556 729.973C46.0674 730.029 53.2467 730.478 63.3576 728.009C75.9215 724.924 82.5623 717.742 84.058 705.792C85.0751 697.376 84.7161 687.558 84.7161 678.637C84.7161 664.78 84.7161 650.978 84.7161 637.12C84.7161 635.044 84.776 632.688 84.8358 630.388L84.8358 626.236C84.8358 625.114 84.8358 624.104 84.7161 623.094ZM40.4436 706.914C45.4691 706.914 51.8707 706.97 56.0586 703.997C59.2295 701.696 60.1269 697.713 60.1269 693.842L60.1269 625.619C60.1269 623.824 59.7081 620.906 59.1099 619.335C56.7766 613.108 48.8793 612.378 42.1188 612.378C35.7172 612.378 27.8797 613.388 25.7858 619.784C25.3072 621.243 24.8884 624.89 24.8884 626.741L24.8884 692.776C24.8884 694.627 25.2473 697.657 25.6661 699.228C26.1447 701.135 27.2216 702.426 28.5977 703.716C29.8541 704.838 31.5292 705.568 33.6232 706.072C35.2386 706.409 38.7086 706.914 40.4436 706.914ZM40.6231 413.601C46.0674 413.601 52.8279 413.713 56.8364 410.122C57.4945 409.505 58.6312 407.934 59.05 407.037C59.5287 405.971 60.1269 402.436 60.1269 401.202L60.1269 331.857C60.1269 330.23 59.5287 326.864 58.9304 325.629C57.1954 321.814 53.4262 320.299 49.1784 319.626C46.1871 319.177 40.982 319.009 37.9308 319.402C34.7001 319.794 30.213 320.412 27.9994 323.105C27.1618 324.115 26.4439 324.451 25.726 326.751C25.2473 328.322 24.8884 331.801 24.8884 333.596L24.8884 399.575C24.8884 406.195 26.5635 411.02 33.7429 412.759C35.5377 413.208 38.4094 413.601 40.6231 413.601Z" fill="white"/>
      </g>
   </symbol>
   <symbol  id="potoki_menu" viewBox="0 0 86 875" fill="none">
      <g style="mix-blend-mode:plus-lighter" opacity="0.3">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M84.776 402.773C85.0153 400.304 84.776 378.367 84.776 375.282L84.776 333.764C84.776 324.732 84.6563 315.306 79.3316 307.788C77.836 305.712 75.9813 304.141 73.648 302.627C70.7763 300.719 67.1268 299.372 63.4175 298.419C55.5202 296.343 44.6315 296.062 36.3155 296.455C23.632 297.072 9.27331 299.597 3.76916 310.818C1.55553 315.306 0.598284 319.963 0.478628 325.068L0.299145 330.062C0.299145 330.286 0.299145 330.623 0.299145 330.903L0.119661 331.689L0.119661 401.202C0.358972 401.595 0.299144 404.792 0.299144 405.522C0.538455 410.01 0.777766 413.657 2.03415 417.865C3.52984 422.914 6.28192 426.785 9.69211 429.366C17.5295 435.145 29.0763 436.772 41.4607 436.772C56.1783 436.772 70.8361 435.594 79.0923 425.663C81.7846 422.465 83.8786 416.069 84.1777 411.806L84.7161 405.354C84.776 404.512 84.7161 403.67 84.776 402.773ZM84.776 501.741C83.2204 501.292 58.7509 501.572 55.0416 501.572C45.0503 501.572 34.9993 501.572 25.008 501.572C24.8285 500.226 24.8884 453.154 24.9482 446.702L24.8285 445.524C24.4097 444.683 25.1277 445.749 24.5892 445.244C23.9909 444.907 1.91449 444.963 0.299144 445.244C4.60079e-06 450.686 0.239316 456.801 0.239316 462.299C0.239315 490.632 0.239315 518.965 0.239315 547.241C0.239315 550.888 -0.0598246 580.174 0.418798 581.016C0.777764 581.353 24.2901 581.297 24.5892 581.016C25.1277 580.623 24.8285 568.673 24.8285 567.158C24.8285 553.02 24.8285 538.826 24.8285 524.687C30.8711 524.687 83.5196 524.968 84.4768 524.575C85.0153 524.126 84.7161 514.589 84.7161 513.298C84.776 509.539 84.8956 505.5 84.776 501.741ZM84.776 851.27C82.5623 850.878 57.9133 851.102 55.0416 851.102C44.9905 851.102 34.9993 851.102 24.9482 851.102L24.9482 767.282L81.1265 767.282C82.2034 767.282 83.9982 767.563 84.776 767.058L84.776 744.897C84.5965 743.606 85.0153 745.907 84.7161 744.616C84.7161 744.56 84.7161 744.504 84.6563 744.504C84.5965 744.504 84.5965 744.392 84.5965 744.392C83.6392 743.831 80.947 744.167 79.5709 744.167L21.2389 744.167C19.1449 744.167 0.897418 743.887 0.418796 744.448L0.358968 744.728C0.119657 745.57 0.418796 743.775 0.29914 744.897L0.299139 841.789C0.299139 844.818 8.77399e-09 873.6 0.53845 874.105C0.777761 874.273 0.358967 874.161 1.01707 874.273C1.19656 874.329 1.43587 874.329 1.67518 874.329C14.8971 874.498 29.2558 874.329 42.5376 874.329C46.4264 874.329 83.9982 874.554 84.5367 874.105C84.8358 873.824 84.5965 874.217 84.776 873.768L84.8358 872.814C84.776 869.28 84.8956 864.399 84.8956 859.967L84.8956 855.422C84.8956 853.851 84.8358 852.392 84.776 851.27ZM84.7161 259.09C84.058 259.034 83.7589 258.921 82.8017 258.921L67.3661 258.921C67.1268 257.911 66.5285 256.453 66.1695 255.387C65.8106 254.321 65.3918 253.255 64.9132 252.021C60.0671 238.724 55.3407 224.698 50.375 211.625L47.9819 204.837C48.1614 204.612 48.0417 204.725 48.3409 204.5L59.5287 195.86C60.3064 195.243 60.9645 194.738 61.8021 194.121L71.0156 186.996C71.554 186.603 71.7934 186.435 72.2121 186.042C72.6908 185.705 72.8702 185.593 73.3489 185.2L84.776 176.055L84.8358 148.171C84.776 146.096 83.1008 147.723 81.9641 148.62L70.4173 157.541C69.1011 158.607 67.9045 159.392 66.5883 160.514L39.4863 181.273C38.7086 178.524 34.4608 167.359 33.3839 164.161C32.9053 162.871 27.7601 148.003 27.1618 147.162C22.3158 146.881 9.39297 147.162 2.93157 147.105C1.73501 147.105 0.299147 146.713 0.358975 147.891C0.598286 149.069 7.17934 166.686 7.9571 168.93C10.3502 175.719 13.1023 182.732 15.4954 189.689C16.3928 192.213 17.2304 194.233 18.068 196.646L23.0935 210.447C23.9909 212.972 24.8285 215.048 25.6661 217.404C29.4951 228.625 34.2215 240.519 38.23 251.964L40.7427 258.809C33.9224 258.809 27.102 258.809 20.3415 258.809C13.8202 258.809 6.70072 258.529 0.478629 258.977C0.119662 262.512 0.478629 275.079 0.418801 280.521C0.418801 282.261 0.538457 282.036 2.87174 282.036L79.7504 282.036C81.0667 282.036 83.9384 282.429 84.7161 281.812L84.8358 281.587C84.8358 281.531 84.8956 281.475 84.8956 281.475L84.9555 270.535C84.9555 268.852 85.0153 266.888 85.0751 264.925L85.0751 261.67C84.8358 260.829 84.8358 259.931 84.7161 259.09ZM84.776 111.816C82.8615 111.311 70.4771 111.648 67.3661 111.648C67.0071 110.862 66.6482 109.684 66.349 108.898L51.3921 67.4374C48.7597 60.0878 45.9477 52.6819 43.435 45.3323L37.4522 28.7255C36.8539 27.0424 35.8967 24.7982 35.4779 23.1711L81.7846 23.1711C82.4427 23.1711 83.4598 23.2272 83.9982 23.1711C85.0153 23.115 84.776 22.6101 84.776 21.6002L84.776 4.20783C84.776 3.70288 84.8358 3.02973 84.8956 2.35651L84.8956 1.4588C84.8358 0.841676 84.776 0.336671 84.4768 1.10101e-06L0.53846 7.01777e-09C-0.179474 0.897705 0.239321 9.65002 0.239321 11.4454C0.239321 13.1285 -0.0598185 22.2734 0.418804 23.0028C1.37605 23.3956 6.82038 23.1151 8.31607 23.1151C9.57245 26.8179 11.128 30.5768 12.3844 34.2797C13.6407 37.9826 15.1364 41.6855 16.3928 45.2762C24.3499 67.4374 32.666 89.6547 40.5632 111.591C33.7429 111.591 26.9225 111.591 20.162 111.591C17.0509 111.591 2.03415 111.367 0.299147 111.76C0.299147 111.984 0.0598359 133.36 0.299147 134.258C0.418803 134.65 0.418803 134.65 0.837597 134.763C1.55553 134.931 68.3832 134.819 74.0668 134.819C75.6223 134.819 83.8187 135.099 84.4768 134.594C85.0153 134.145 84.776 132.687 84.776 132.013C84.776 128.815 84.8358 123.991 84.8956 119.614L84.8956 117.202C84.8956 115.126 84.8358 113.219 84.776 111.816ZM84.7161 623.094L84.4768 618.886C83.8786 602.784 77.2975 594.313 59.8876 590.89C49.7767 588.927 33.4437 589.151 23.3328 591.171C19.5039 591.956 15.974 593.191 12.6237 594.986C7.47847 597.735 3.82898 602.055 1.97432 608.171C0.777764 612.098 0.358969 616.25 0.239314 620.457C0.239314 621.187 0.239314 624.553 2.72177e-06 624.946L1.96272e-06 694.515C0.239313 694.964 0.179485 695.637 0.119658 696.142C0.0598297 700.743 0.717935 709.327 2.51277 713.029C2.93156 713.927 3.2307 714.713 3.6495 715.554C4.60674 717.406 5.8033 719.257 7.35882 720.772C7.59813 720.996 7.89727 721.277 8.25624 721.557C8.79469 722.062 8.79469 722.062 9.27331 722.399L12.504 724.531C15.2561 726.102 19.6833 727.729 23.1534 728.402C26.8627 729.075 32.307 729.917 36.2556 729.973C46.0674 730.029 53.2467 730.478 63.3576 728.009C75.9215 724.924 82.5623 717.742 84.058 705.792C85.0751 697.376 84.7161 687.558 84.7161 678.637C84.7161 664.78 84.7161 650.978 84.7161 637.12C84.7161 635.044 84.776 632.688 84.8358 630.388L84.8358 626.236C84.8358 625.114 84.8358 624.104 84.7161 623.094ZM40.4436 706.914C45.4691 706.914 51.8707 706.97 56.0586 703.997C59.2295 701.696 60.1269 697.713 60.1269 693.842L60.1269 625.619C60.1269 623.824 59.7081 620.906 59.1099 619.335C56.7766 613.108 48.8793 612.378 42.1188 612.378C35.7172 612.378 27.8797 613.388 25.7858 619.784C25.3072 621.243 24.8884 624.89 24.8884 626.741L24.8884 692.776C24.8884 694.627 25.2473 697.657 25.6661 699.228C26.1447 701.135 27.2216 702.426 28.5977 703.716C29.8541 704.838 31.5292 705.568 33.6232 706.072C35.2386 706.409 38.7086 706.914 40.4436 706.914ZM40.6231 413.601C46.0674 413.601 52.8279 413.713 56.8364 410.122C57.4945 409.505 58.6312 407.934 59.05 407.037C59.5287 405.971 60.1269 402.436 60.1269 401.202L60.1269 331.857C60.1269 330.23 59.5287 326.864 58.9304 325.629C57.1954 321.814 53.4262 320.299 49.1784 319.626C46.1871 319.177 40.982 319.009 37.9308 319.402C34.7001 319.794 30.213 320.412 27.9994 323.105C27.1618 324.115 26.4439 324.451 25.726 326.751C25.2473 328.322 24.8884 331.801 24.8884 333.596L24.8884 399.575C24.8884 406.195 26.5635 411.02 33.7429 412.759C35.5377 413.208 38.4094 413.601 40.6231 413.601Z" fill="white"/>
      </g>
   </symbol>

</svg>
</body>
</html>
