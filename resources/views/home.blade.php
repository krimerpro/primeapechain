@extends('layouts.default')
@section('content')

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div id="particles-js"></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
        <div class="banner-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-content pt-5">
                        <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s">ARABIAN APE GROW</h1>
                        <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s">The Next Generation of NFT Marketplace</h3>
                        <div class="mt-5">
                            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=" target="_blank" class="btn btn-lg btn-gradient-purple btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s">Buy on PancakeSwap</a>
                            <a href="https://bscscan.com/token/" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s">BscScan Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 move-first">
                    <div id="svg-animation">
                        <img src="{{ asset('images/logo.png') }}" style="width:100%;height:100%;border-radius:50%;display: block;margin-left: auto;margin-right: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

<!-- Tokenomics -->
<section class="about section-padding" id="tokenomics">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Tokenomics</h6>
            <h2 class="title">Tokenomics</h2>
        </div>
    </div>
    <div class="content-area" style="color:#ffffff">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Token Symbol</h3>
                    <h4 style="font-size:24px">AAG</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Supply</h3>
                    <h4 style="font-size:24px">1.000.000.000.000.000</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px">9</h4>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Tax</h3>
                    <h4 style="font-size:24px">8% Buy | 8% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Wallet</h3>
                    <h4 style="font-size:24px">3%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Max Tx</h3>
                    <h4 style="font-size:24px">3%</h4>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12">
              <div style="text-align:center">
                  <h3 style="font-size:16px;">Smart Contract | BSC</h3>
              </div>

              <div class="row" style="border:dashed;">
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                  <div class="col-md-2 col-lg-2" style="text-align:center;margin:auto">
                      <img src="{{ asset('images/bsc-logo.svg') }}" style="height:75px">
                  </div>

                  <div class="col-md-9 col-lg-9">

                      <div style="-webkit-box-shadow: 0px 28px 28px -24px rgb(56 62 86 / 25%);box-shadow: 0px 28px 28px -24px rgb(56 62 86 / 25%);border-radius: 12px;padding: 16px 20px;text-decoration: none !important;display: block;">
                          <div class="text-center">
                            <input type="text" value="0xabcdefghijklmnopqrstuvwxyz" id="smartcontractaddress" readonly style="width:100%;text-align:center;color:#ffffff;background:none;border:none" />
                          </div>
                          <button type="button" style="cursor: pointer;border-radius:15px;width:100%" class="btn btn-primary" onclick="copyContract()">
                              <span class="fa fa-copy"></span>
                              Copy
                          </button>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
</section>
<!--/ Tokenonmics -->

<!-- About -->
<section class="about section-padding" id="about">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">About</h6>
            <h2 class="title">About</h2>
        </div>
    </div>

    <div class="content-area">
        <div class="row">
            <div class="col-md-4 col-lg-4" style="border-right:solid;color:#ffffff">
                <p style="color:#ffffff">Do you know why this arabian ape grow statue is widely displayed in business premises</p>
                <p style="color:#ffffff">Well, a little review, this arabian ape grow statue is familiarly known as bored ape in NFTs world</p>
            </div>

            <div class="col-md-4 col-lg-4" style="border-right:solid;color:#ffffff">
                <p style="color:#ffffff">This is where our inspiration to name our token ARABIAN APE GROW makes the cat of victory after the token's name</p>
                <p style="color:#ffffff">We makes this motivation so that every holder can enjoy the profit from the name of this token</p>
                <p style="color:#ffffff">NFT's (non fungible tokens) are a special type of cryptographic token which represents something unique; non-fungible tokens are thus not mutually interchangeable. We choose ARABIAN APE GROW for our platform because they are unique as NFTs.</p>
            </div>

            <div class="col-md-4 col-lg-4">
                <p style="color:#ffffff">On our website, anyone can make their own work or art and enter it into our NFT marketplace to be traded using ARABIAN APE GROW tokens</p>
                <p style="color:#ffffff">This is the future for those of you who have a hobby or do work in the arts</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ About -->

<!-- Whitepaper -->
<section id="whitepaper" class="whitepaper section-padding">
<div class="container">
    <div class="heading text-center">
        <h6 class="sub-title">Whitepaper</h6>
        <h2 class="title">Whitepaper</h2>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-12">
            <div style="background:#ffffff;text-align:center;padding:20px">
                <a href="{{ asset('/documents/whitepaper.pdf') }}" target="_blank" style="margin: auto">
                    <img src="{{ asset('/images/whitepaper.jpeg') }}" >
                    <br>
                    View Whitepaper
                </a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12">
            <div class="content-area">
                <h4 class="title animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">Read Whitepaper</h4>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">A white paper is an authoritative report or guide that informs readers concisely about a complex issue and presents the issuing body's philosophy on the matter. It is meant to help readers understand an issue, solve a problem, or make a decision.</p>
                <p class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.8s">Since the early 1990s, the term "white paper", or "whitepaper", has been applied to documents used as marketing or sales tools in business.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Whitepaper -->

<!-- Roadmap -->
<section id="roadmap" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Roadmap</h6>
            <h2 class="title">Roadmap</h2>
        </div>
    </div>
    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <img src="{{ asset('images/roadmap.jpeg') }}" style="width:100%;height:100%" >
            </div>
        </div>

        <div class="clear"></div>

        <div class="row" style="margin:auto;margin-top:15px">
            <div class="col-md-12 col-lg-12">
                <a href="{{ asset('/documents/roadmap.pdf') }}" target="_blank" style="color:#ffffff;font-size:16px;margin-top:15px;cursor:pointer">Download Roadmap</a>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Roadmap -->


<?php
  if($agent->isMobile()){
?>

<!-- Community -->
<section id="community" class="roadmap section-padding">
<div class="container">
    <div class="heading text-center">
        <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
            <h6 class="sub-title">Community</h6>
            <h2 class="title">Community</h2>
        </div>
    </div>

    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" style="text-align:center">
        <div class="row" style="margin:auto;width:100%">
            <div class="col-md-12">
                <a href="https://t.me/ArabianApeGrow" target="_blank" class="btn btn-primary" style="background:white;color:#007BFF;font-size:16px;width:100%">
                    <img src="{{ asset('images/telegram.svg') }}" style="width:50px;height:50px" />
                    View on Telegram
                </a>
            </div>
        </div>
    </div>

    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" style="text-align:center;margin-top:15px">
        <div class="row" style="margin:auto;width:100%">
            <div class="col-md-12">
                <a href="https://twitter.com/ArabianApeGrow" target="_blank" class="btn btn-primary" style="background:white;color:#007BFF;font-size:16px;width:100%">
                    <img src="{{ asset('images/twitter.svg') }}" style="width:50px;height:50px" />
                    View on Twitter
                </a>
            </div>
        </div>
    </div>

    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" style="text-align:center;margin-top:15px">
        <div class="row" style="margin:auto;width:100%">
            <div class="col-md-12">
                <a href="mailto:arabianapegrow@gmail.com" target="_blank" class="btn btn-primary" style="background:white;color:#007BFF;font-size:16px;width:100%">
                    <img src="{{ asset('images/gmail.svg') }}" style="width:50px;height:50px" />
                    Mail Us Directly
                </a>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Community -->

<?php
  }
?>

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

<script type="text/javascript">

  function copyContract() {
    var copyText = document.getElementById("smartcontractaddress");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    document.execCommand("copy");

    alert("Text copied to clipboard");
  }

</script>

@stop
