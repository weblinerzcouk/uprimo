@include('pages.includes.header')
      <!--start Layer slider-->
      <section id="slider">
         <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:200px;">
               <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                  <img style="margin: 0 !important;" src="{{asset('/custom_assets/images/slider/cat-bg.png')}}" class="ls-bg" alt="Slide background"/>
                  <h1 class="ls-l" style="font-family: 'Roboto Slab', serif; color: #fff; top:100px; ;font-weight: 700; left:116px; top:70px;left: 0;right: 0;text-align: center;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                     Messages
                  </h1>
                  <h2 class="ls-l pt-4" style="font-family: Raleway, sans-serif; top: 110px; font-weight: 300; height: 40px; padding: 5px 22px; font-size: 17px; line-height: 37px; color: rgb(255, 255, 255); border-radius: 3px; white-space: nowrap;right: 0px; text-align: center; width: auto; border-width: 0px; margin-left: 0px; margin-top: 0px; transform-origin: 50% top 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.002, 0, 0, 0, 1); opacity: 1; visibility: visible;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                     Home&emsp;<i class="fa fa-caret-right" aria-hidden="true"></i>&emsp;Messages
                  </h2>
               </div>
            </div>
         </div>
      </section>
      <!--end layer slider section-->
      <section class="pt-5 mt-5 fixed-header-margin">
         <div class="container">
            <div class="row">
               <div class="messaging">
                     <div class="inbox_msg">

                        <div class="col-md-4 p-0">
                           <div class="inbox_people">
                              <div class="headind_srch">
                              <div class="recent_heading">
                                 <h4>Inbox</h4>
                              </div>
                           </div>
                           <div class="inbox_chat">
                              <div class="chat_list active_chat">
                                 <div class="chat_people">
                                    <div class="chat_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                    <div class="chat_ib">
                                       <h5>John Doe <span class="chat_date">5 day ago</span></h5>
                                       <p>BMW Car For Sale
                                       </p>
                                    </div>
                                 </div>
                              </div>
                               @foreach($contacts as $contacts_row)
                              <div class="chat_list">
                                 <div class="chat_people">
                                    <div class="chat_img">
                                        @if($contacts_row->pic!=null)
                                        <img src="{{asset('/images/users/'.$contacts_row->id.'/'.$contacts_row->pic)}}" alt="{{$contacts_row->name}}">
                                            @else
                                            <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="{{$contacts_row->name}}">
                                        @endif
                                    </div>
                                    <div class="chat_ib">
                                       <h5>{{$contacts_row->name}}<span class="chat_date">5 day ago</span></h5>
                                       <p>BMW Car For Sale
                                       </p>
                                    </div>
                                 </div>
                              </div>
                                   @endforeach

                           </div>
                           </div>
                        </div>


                        <div class="col-md-8">
                           <div class="mesgs">
                              <div class="msg-open-tab mb-5">
                                 <div class="row pb-3">
                                    <div class="col-md-9">
                                       <div class="chat_list">
                                          <div class="chat_people">
                                             <div class="chat_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                             <div class="chat_ib">
                                                <h5>John Doe</h5>
                                                <p>5 day ago
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <button class="btn btn-default">View Profile</button>
                                       <button class="btn btn-green">Call Seller</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="msg_history">
                              <div class="incoming_msg">
                                 <div class="incoming_msg_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                 <div class="received_msg">
                                    <div class="received_withd_msg">
                                       <p>Test which is a new approach to have all
                                          solutions
                                       </p>
                                       <span class="time_date"> 11:01 AM    |    June 9</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="outgoing_msg">
                                 <div class="incoming_msg_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                 <div class="sent_msg">
                                    <p>Test which is a new approach to have all
                                       solutions
                                    </p>
                                    <span class="time_date"> 11:01 AM    |    June 9</span>
                                 </div>
                              </div>
                              <div class="incoming_msg">
                                 <div class="incoming_msg_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                 <div class="received_msg">
                                    <div class="received_withd_msg">
                                       <p>Test, which is a new approach to have</p>
                                       <span class="time_date"> 11:01 AM    |    Yesterday</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="outgoing_msg">
                                 <div class="incoming_msg_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                 <div class="sent_msg">
                                    <p>Apollo University, Delhi, India Test</p>
                                    <span class="time_date"> 11:01 AM    |    Today</span>
                                 </div>
                              </div>
                              <div class="incoming_msg">
                                 <div class="incoming_msg_img"> <img src="{{asset('/custom_assets/images/inbox-pic.png')}}" alt="sunil"> </div>
                                 <div class="received_msg">
                                    <div class="received_withd_msg">
                                       <p>We work directly with our designers and suppliers,
                                          and sell direct to you, which means quality, exclusive
                                          products, at a price anyone can afford.
                                       </p>
                                       <span class="time_date"> 11:01 AM    |    Today</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="type_msg">
                              <div class="input_msg_write">
                                 <input type="text" class="write_msg" placeholder="Type a message" />
                                 <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </section>
      <!--Category-->
      @include('pages.includes.footer')
