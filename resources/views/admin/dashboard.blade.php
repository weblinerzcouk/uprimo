@include('admin.includes.header')

         <div id="page-wrapper">
            <div class="container-fluid">
            </div>
            <div class="container-fluid">
               <div class="row bg-title">
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">Dashboard</h4>
                  </div>
                  <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     <ol class="breadcrumb">
                         <li><a href="#">Dashboard</a></li>
                     </ol>
                     </div> -->
                  <!-- /.col-lg-12 -->
               </div>
               <!-- /.row -->
               <!-- ============================================================== -->
               <!-- Different data widgets -->
               <!-- ============================================================== -->
               <!-- .row -->
               <div class="row">
                  <div class="col-lg-4 col-sm-6 col-xs-12">
                     <div class="white-box analytics-info">
                        <h3 class="box-title">Total Ads</h3>
                        <ul class="list-inline two-part">
                           <li>
                              <div id="sparklinedash"></div>
                           </li>
                           <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-xs-12">
                     <div class="white-box analytics-info">
                        <h3 class="box-title">Total Revenue</h3>
                        <ul class="list-inline two-part">
                           <li>
                              <div id="sparklinedash2"></div>
                           </li>
                           <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-xs-12">
                     <div class="white-box analytics-info">
                        <h3 class="box-title">Unique Visitor</h3>
                        <ul class="list-inline two-part">
                           <li>
                              <div id="sparklinedash3"></div>
                           </li>
                           <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!--/.row -->
               <!--row -->
               <!-- /.row -->
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <div class="white-box">
                        <h3 class="box-title">Monthly Revenue</h3>
                        <ul class="list-inline text-right">
                           <li>
                              <h5><i class="fa fa-circle m-r-5 text-info"></i>May</h5>
                           </li>
                           <li>
                              <h5><i class="fa fa-circle m-r-5 text-inverse"></i>June</h5>
                           </li>
                        </ul>
                        <div id="ct-visits" style="height: 405px;"></div>
                     </div>
                  </div>
               </div>
               <!-- ============================================================== -->
               <!-- table -->
               <!-- ============================================================== -->
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-sm-12">
                     <div class="white-box">
                        <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                           <select class="form-control pull-right row b-none">
                              <option>March 2017</option>
                              <option>April 2017</option>
                              <option>May 2017</option>
                              <option>June 2017</option>
                              <option>July 2017</option>
                           </select>
                        </div>
                        <h3 class="box-title">Newly Posted Featured Ads</h3>
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>STATUS</th>
                                    <th>DATE</th>
                                    <th>PAYMENT</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td>Transfer</td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                 </tr>
                                 <tr>
                                    <td>2</td>
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td>Transfer</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                 </tr>
                                 <tr>
                                    <td>3</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td>Transfer</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                 </tr>
                                 <tr>
                                    <td>4</td>
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td>Cancelled</td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-$24</span></td>
                                 </tr>
                                 <tr>
                                    <td>5</td>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td>Process</td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td>Transfer</td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="text-danger">-$14</span></td>
                                 </tr>
                                 <tr>
                                    <td>7</td>
                                    <td class="txt-oflo">Helping Hands WP Theme</td>
                                    <td>Transfer</td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
 @include('admin.includes.footer');
