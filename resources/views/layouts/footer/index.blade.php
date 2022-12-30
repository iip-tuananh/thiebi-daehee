<footer id="footer" class="footer-wrapper mtt-20">
    <section class="section section6" id="section_618957852">
       <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
       </div>
    </section>
    <section class="section footer-section dark" id="section_1867539374">
       <div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >
       </div>
       <div class="section-content relative">
          <div class="row row-small row1"  id="row-1277746357">
             <div id="col-1957232624" class="col medium-3 small-6 large-3"  >
                <div class="col-inner"  >
                   <h3><span style="font-size: 90%;">Dịch vụ {{$setting->company}}</span></h3>
                   <ul>
                      <li><span style="font-size: 90%;"><a href="{{route('home')}}">Trang chủ</a></span></li>
                      <li><span style="font-size: 90%;"><a href="http://vhb.vn/gioi-thieu/">Về chúng tôi</a></span></li>
                      <li><span style="font-size: 90%;"><a href="http://vhb.vn/cua-hang/">Sản phẩm</a></span></li>
                      <li><span style="font-size: 90%;"><a href="/lien-he/">Liên hệ hợp tác</a></span></li>
                      <li><span style="font-size: 90%;"><a href="/lien-he/">Liên hệ mua hàng</a></span></li>
                   </ul>
                </div>
             </div>
             <div id="col-1634647167" class="col medium-3 small-6 large-3"  >
                <div class="col-inner"  >
                   <h3><span style="font-size: 90%;">Hỗ trợ khách hàng</span></h3>
                   <ul>
                      <li><span style="font-size: 90%;"><a href="/chinh-sach-van-chuyen/">Chính sách vận chuyển</a></span></li>
                      <li><span style="font-size: 90%;"><a href="/chinh-sach-thanh-toan/">Chính sách thanh toán</a></span></li>
                      <li><span style="font-size: 90%;"><a href="/chinh-sach-bao-hanh/">Chính sách bảo hành</a></span></li>
                      <li><span style="font-size: 90%;"><a href="/chinh-sach-doi-tra-hang/">Chính sách đổi trả hàng</a></span></li>
                      <li><span style="font-size: 90%;"><a href="/chinh-sach-bao-mat/">Chính sách bảo mật</a></span></li>
                   </ul>
                </div>
             </div>
             <div id="col-463864154" class="col cot4 medium-6 small-12 large-6"  >
                <div class="col-inner"  >
                   <h3><span style="font-size: 90%;">Liên hệ với chúng tôi</span></h3>
                   <p><span style="font-size: 90%;">{{$setting->company}}</span></p>
                   <p><span style="font-size: 90%;"><strong>Địa chỉ: {{$setting->address1}}</strong></span></p>
                   <p><span style="font-weight: 400; font-size: 90%;">Hotline: {{$setting->phone1}} | {{$setting->phone2}}</span></p>
                   <p><span style="font-weight: 400; font-size: 90%;">Email: {{$setting->email}}</span></p>
                   <p><span style="font-size: 90%;">MST: #####</span></p>
                   <div class="social-icons follow-icons" ><a href="{{$setting->facebook}}" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook"><i class="icon-facebook" ></i></a>
                    </div>
                </div>
             </div>
          </div>
       </div>
       <style>
          #section_1867539374 {
          padding-top: 30px;
          padding-bottom: 30px;
          background-color: rgb(23, 25, 31);
          }
          #section_1867539374 .ux-shape-divider--top svg {
          height: 150px;
          --divider-top-width: 100%;
          }
          #section_1867539374 .ux-shape-divider--bottom svg {
          height: 150px;
          --divider-width: 100%;
          }
       </style>
    </section>
    <div class="absolute-footer dark medium-text-center text-center">
       <div class="container clearfix">
          <div class="footer-primary pull-left">
             <div class="copyright-footer">
                © 2022 - SBT - Uy tín chất lượng công nghệ hàng đầu. All Rights Reserved
                <div id="popup"
                   class="lightbox-by-id lightbox-content mfp-hide lightbox-white "
                   style="max-width:500px ;padding:20px">
                   <div class="wpcf7 no-js" id="wpcf7-f5240-o1" lang="vi" dir="ltr">
                      <div class="screen-reader-response">
                         <p role="status" aria-live="polite" aria-atomic="true"></p>
                         <ul></ul>
                      </div>
                      <form action="{{route('postcontact')}}" method="post" >
                       @csrf
                         <div class="form-popup" id="popup">
                            <p class="title-form text-center text-uppercase">ĐĂNG KÝ NHẬN TƯ VẤN
                            </p>
                            <p>
                             
                                <input type="text" name="name" placeholder="Nhập tên của bạn">
                           
                              <br />
                               
                                <input type="number" name="phone" placeholder="Nhập số điện thoại">
                             
                              <br />
                              
                                <input type="email" name="email" placeholder="Nhâp email">
                              </span>
                              <br />
                               
                                 <textarea name="mess" id="" cols="30" rows="10"></textarea>
                             
                            </p>
                            <div class="">
                               <p><button type="submit">Gửi thông tin</button>
                               </p>
                            </div>
                         </div>
         
                      </form>
                   </div>
                </div>
                <script type="rocketlazyloadscript">
                   // Auto open lightboxes
                   jQuery(document).ready(function ($) {
                       /* global flatsomeVars */
                       'use strict'
                       var cookieId = 'lightbox_popup'
                       var cookieValue = 'opened_1'
                       var timer = parseInt('40000')
                   
                       // Auto open lightbox
                                       cookie(cookieId, false)
                       
                       // Run lightbox if no cookie is set
                       if (cookie(cookieId) !== cookieValue) {
                   
                           // Ensure closing off canvas
                           setTimeout(function () {
                               if (jQuery.fn.magnificPopup) jQuery.magnificPopup.close()
                           }, timer - 350)
                   
                           // Open lightbox
                           setTimeout(function () {
                               $.loadMagnificPopup().then(function() {
                                   $.magnificPopup.open({
                                       midClick: true,
                                       removalDelay: 300,
                                       // closeBtnInside: flatsomeVars.lightbox.close_btn_inside,
                                       // closeMarkup: flatsomeVars.lightbox.close_markup,
                                       items: {
                                           src: '#popup',
                                           type: 'inline'
                                       }
                                   })
                               })
                           }, timer)
                   
                           // Set cookie
                           cookie(cookieId, cookieValue, 365)
                       }
                   })
                </script>
             </div>
          </div>
       </div>
    </div>
 </footer>