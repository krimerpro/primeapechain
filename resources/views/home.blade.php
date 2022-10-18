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
                        <h1 class="best-template animated" data-animation="fadeInUpShorter" data-animation-delay="1.5s">PRIME APE CHAIN</h1>
                        <h3 class="d-block white animated" data-animation="fadeInUpShorter" data-animation-delay="1.6s">The Next Gen Multi Proof Of Stake Blockchain With Fast And Scalable</h3>
                        <div class="mt-5">
                            <a href="https://exchange.pancakeswap.finance/#/swap?inputCurrency=0xb4692bC0CBe711536d5a4124B052640BBC9E6Dc7" target="_blank" class="btn btn-lg btn-gradient-blue btn-glow mr-4 mb-2 animated" data-animation="fadeInUpShorter" data-animation-delay="1.7s">Buy on PancakeSwap</a>
                            <a href="https://bscscan.com/token/0xb4692bC0CBe711536d5a4124B052640BBC9E6Dc7" class="btn btn-lg btn-gradient-blue btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s">BscScan Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 move-first">
                    <div id="svg-animation">
                      <?php
                        if($agent->isMobile()){
                      ?>
                            <img src="{{ asset('images/logo.png') }}" style="width:50%;height:50%;border-radius:50%;display: block;margin-left: auto;margin-right: auto;">
                      <?php
                    } else{
                      ?>
                            <img src="{{ asset('images/logo.png') }}" style="width:100%;height:100%;border-radius:50%;display: block;margin-left: auto;margin-right: auto;">
                      <?php
                    }
                      ?>
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
            <div class="col-md-12 col-lg-12">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Token Symbol</h3>
                    <h4 style="font-size:24px">AAG</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Supply</h3>
                    <h4 style="font-size:24px">1.000.000.000.000.000</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Decimals</h3>
                    <h4 style="font-size:24px">9</h4>
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Tax</h3>
                    <h4 style="font-size:24px">4% Buy | 4% Sell</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Wallet</h3>
                    <h4 style="font-size:24px">4%</h4>
                </div>

                <div style="margin-bottom:15px;border-bottom-style: solid;">
                    <h3 style="font-size:16px">Max Tx</h3>
                    <h4 style="font-size:24px">4%</h4>
                </div>

                <div style="margin-bottom:15px;">
                    <h3 style="font-size:16px">Initial LP</h3>
                    <h4 style="font-size:24px">2 BNB & 96% of Total Supply</h4>
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
                            <input type="text" value="0xb4692bC0CBe711536d5a4124B052640BBC9E6Dc7" id="smartcontractaddress" readonly style="width:100%;text-align:center;color:#ffffff;background:none;border:none" />
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
                <p style="color:#ffffff">The Next Gen Multi Proof Of Stake Blockchain With Fast And Scalable</p>
                <p style="color:#ffffff">Supported by a smart ecosystem that is made independently , PRIME APE CHAIN is the next generation in blockchain development technology in cryptocurrencies with full support with all access to the latest technology developed in the Blockchain world</p>
            </div>

            <div class="col-md-4 col-lg-4" style="border-right:solid;color:#ffffff">
                <p style="color:#ffffff">PRIME APE CHAIN is layer 1 the only decentralized blockchain and smart contract platform built for omnichain interoperability.</p>
                <p style="color:#ffffff">We believe that all the best innovations will create good technology in the development of the Blockchain world in the web 4.0 era , Therefore PRIME APE CHAIN creates all use cases with Smart technology to synergize with the projects we develop</p>
            </div>

            <div class="col-md-4 col-lg-4">
                <p style="color:#ffffff">PRIME APE CHAIN is Layer 1 with Multi Proof Of Stake Consensus & trustworthy Decentralized Solution without a single point of failure</p>
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
                <img src="{{ asset('images/roadmap.png') }}" style="width:100%;height:100%" >
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
                <a href="https://t.me/PrimeApeChain" target="_blank" class="btn btn-primary" style="background:white;color:#007BFF;font-size:16px;width:100%">
                    <img src="{{ asset('images/telegram.svg') }}" style="width:50px;height:50px" />
                    View on Telegram
                </a>
            </div>
        </div>
    </div>

    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" style="text-align:center;margin-top:15px">
        <div class="row" style="margin:auto;width:100%">
            <div class="col-md-12">
                <a href="https://twitter.com/PrimeApeChain" target="_blank" class="btn btn-primary" style="background:white;color:#007BFF;font-size:16px;width:100%">
                    <img src="{{ asset('images/twitter.svg') }}" style="width:50px;height:50px" />
                    View on Twitter
                </a>
            </div>
        </div>
    </div>

    <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s" style="text-align:center;margin-top:15px">
        <div class="row" style="margin:auto;width:100%">
            <div class="col-md-12">
                <a href="mailto:primeapechain@gmail.com" target="_blank" class="btn btn-primary" style="background:white;color:#007BFF;font-size:16px;width:100%">
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
