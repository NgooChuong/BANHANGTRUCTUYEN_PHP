<div class="ptb-100">
					<div class="container">
						<div class="cart-item-table commun-table">
				            <div class="table-responsive">
				              <table class="table border mb-0">
				                <thead>
				                  <tr>
				                    <th class="align-left">Product</th>
				                    <th class="align-left">Product Name</th>
				                    <th>Price</th>
				                    <th>Quantity</th>
				                    <th>Sub Total</th>
				                    <th>Action</th>
				                  </tr>
				                </thead>
				                <tbody>
									<?php
										foreach ($data as $value){
									?>
				                  <tr>
				                    <td class="align-left">
				                      <a href="product-page.html">
				                        <div class="product-image">
				                          <img alt="Eshoper" src="<?php echo URL_LAYOUT.'/images/PicturesProject/'.$value[0]['anhSP']?>">
				                        </div>
				                      </a>
				                    </td>
				                    <td class="align-left">
				                      <div class="product-title"> 
				                        <a href="product-page.html"><?php echo $value[0]['tensp'];?></a> 
				                      </div>
				                    </td>
				                    <td>
				                      <ul>
				                        <li>
				                          <div class="base-price price-box"> 
				                            <span class="price"><?php echo $value[0]['gia'];?></span> 
				                          </div>
				                        </li>
				                      </ul>
				                    </td>
				                    <td>
				                      <div class="input-box">
											<div class="<?php echo "pro-qty" . $value[0]['masp']?>" style = "display:flex; justify-content:space-around;">
												<a href="<?php echo URL."Cart/dec/".$value[0]['masp']?>" 
													class="qtyUpdate"
													data-id="<?php $value[0]['masp']?>"> 
													<span class="dec qtybtn">-</span>
												</a>
												<a class = "<?php echo 'num'.$value[0]['masp']?>">
													<p class= "<?php echo 'subNum'.$value[0]['masp']?>">
														<?php echo $value['num']?>
													</p>
													<!-- <input type="text" value="<?php echo $value[0]['num']?>" 
													class= "<?php echo 'subNum'.$value[0]['masp']?>"> -->
												</a>
												
												<a href="<?php echo URL."Cart/inc/".$value[0]['masp']?>" 
													class="qtyUpdate"
													data-id="<?php $value[0]['masp']?>"> 
													<span class="inc qtybtn">+</span>
												</a>
											</div>
				                      </div>
				                    </td>
				                    <td>
				                        <div class="total-price price-box"> 
				                        <span class="price <?php echo 'subTotal'.$value[0]['masp'] ?>">
											<?php
												 echo number_format($value['num'] * $value[0]['gia'],2);
											?>
										</span> 
				                      </div>
				                    </td>
				                    <td>
				                    	<a href="<?php echo URL.'Cart/delete/'.$value[0]['masp'];?>" class="btn small btn-color">
					                    	<i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i>
					                	</a>
				                    </td>
				                  </tr>
								  <?php
										}
								  ?>
				                </tbody>
				              </table>
				            </div>
				        </div>
				        <div class="mb-30">
					        <div class="row">
						        <div class="col-md-6">
						            <div class="mt-30"> 
						              <a href="<?php echo URL?>" class="btn btn-color">
						                <i class="fa fa-angle-left"></i><span>Continue Shopping</span>
						              </a> 
						            </div>
						        </div>
						        <div class="col-md-6">
						            <div class="mt-30 right-side float-none-sm"> 
						            	<a href="javascript:void(0)" class="btn btn-color">Update Cart</a> 
						            </div>
						        </div>
					        </div>
				        </div>
				        <hr>
				        <div class="mtb-30">
					        <div class="row">
					          <div class="col-md-6 mb-sm-20">
					            <div class="estimate">
					              <div class="heading-part mb-20">
					                <h3 class="sub-heading">Estimate shipping and tax</h3>
					              </div>
					              <form class="full">
					                <div class="row">
					                  <div class="col-md-12">
					                    <div class="input-box mb-20">
					                      <select id="country_id" class="full">
					                        <option selected="" value="">Select Country</option>
					                        <option value="1">India</option>
					                        <option value="2">China</option>
					                        <option value="3">Pakistan</option>
					                      </select>
					                    </div>
					                  </div>
					                  <div class="col-md-6">
					                    <div class="input-box mb-20">
					                      <select id="state_id" class="full">
					                        <option selected="" value="1">Select State/Province</option>
					                        <option value="2">---</option>
					                      </select>
					                    </div>
					                  </div>
					                  <div class="col-md-6">
					                    <div class="input-box mb-20">
					                      <select id="city_id" class="full">
					                        <option selected="" value="1">Select City</option>
					                        <option value="2">---</option>
					                      </select>
					                    </div>
					                  </div>
					                </div>
					              </form>
					            </div>
					          </div>
					          <div class="col-md-6">
					            <div class="cart-total-table commun-table">
					              <div class="table-responsive">
					                <table class="table border">
					                  <thead>
					                    <tr>
					                      <th colspan="2">Cart Total</th>
					                    </tr>
					                  </thead>
					                  <tbody>
					                    <tr>
					                      <td>Item(s) Subtotal</td>
					                      <td>
					                        <div class="price-box"> 
					                          <span class="price">
												<?php
													$tong = 0;
													foreach ($data as $value){
														$tong+=$value['num'] * $value[0]['gia'];
													}
													echo number_format($tong,2);
												?>
											  </span> 
					                        </div>
					                      </td>
					                    </tr>
					                    <tr>
					                      <td>Shipping</td>
					                      <td>
					                        <div class="price-box"> 
					                          <span class="price">$0.00</span> 
					                        </div>
					                      </td>
					                    </tr>
					                    <tr>
					                      <td><b>Amount Payable</b></td>
					                      <td>
					                        <div class="price-box"> 
					                          <span class="price"><b><?php echo number_format($tong,2);?></b></span> 
					                        </div>
					                      </td>
					                    </tr>
					                  </tbody>
					                </table>
					              </div>
					            </div>
					          </div>
					        </div>
					    </div>
					    <hr>
					    <div class="mt-30">
					        <div class="row">
					          <div class="col-12">
					            <div class="right-side float-none-xs"> 
					              <a href="checkout.html" class="btn btn-color">Proceed to checkout
					                <span><i class="fa fa-angle-right"></i></span>
					              </a> 
					            </div>
					          </div>
					        </div>
					    </div>
					</div>
				</div>