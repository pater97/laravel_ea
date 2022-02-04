<template>
    <div class="wrapper">
                        <p class="glitch">
                          <span>G</span>
                          <span>L</span>
                          <span>I</span>
                          <span>T</span>
                          <span>C</span>
                          <span>H</span>
                        </p>
                        <p class="glitch_fixed">
                          <span>G</span>
                          <span>L</span>
                          <span>I</span>
                          <span>T</span>
                          <span>C</span>
                          <span>H</span>
                        </p>
                        <p class="glitch_opacity">
                          <span>G</span>
                          <span>L</span>
                          <span>I</span>
                          <span>T</span>
                          <span>C</span>
                          <span>H</span>
                        </p>
                      </div>
</template>

<script>
export default {
    
}
</script>

<style lang="scss" scoped>
 .wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: 0px;
            transform: translateX(-50%) translateY(-50%);
          }
          
          .glitch {
            font-size: 30px;
            text-align: center;
            position: relative;
            animation: shake .4s infinite;
            animation-direction: alternate;
            top: 1rem;
          }
          
          .glitch_fixed {
            font-size: 30px;
            text-align: center;
            position: relative;
            color: #EEEEEE;
            animation: color .4s infinite;
            animation-direction: alternate;
          }
          
          .glitch_opacity {
            font-size: 30px;
            text-align: center;
            position: relative;
            color: #EEEEEE;
            position: absolute;
            top: 0;
            left: -2px;
            animation: show .2s infinite;
            animation-direction: alternate;
            top: 1rem;
          }
          
          .glitch_opacity span {
            color: #F802F8;
          }
          
          @keyframes show {
            50% {
              opacity: 0;
              text-shadow: 2px 2px #AAE90E;
            }
          }
          
          @keyframes color {
            50% {
              color: #b1b1b1;
            }
          }
          
          @keyframes shake {
            0% {
              transform: translate(2px, 1px) rotate(0deg);
            }
            10% {
              transform: translate(-1px, -2px) rotate(-1deg);
            }
            20% {
              transform: translate(-3px, 0px) rotate(1deg);
            }
            30% {
              transform: translate(0px, 2px) rotate(0deg);
            }
            40% {
              transform: translate(1px, -1px) rotate(1deg);
            }
            50% {
              transform: translate(-1px, 2px) rotate(-1deg);
            }
            60% {
              transform: translate(-3px, 1px) rotate(0deg);
            }
            70% {
              transform: translate(2px, 1px) rotate(-1deg);
            }
            80% {
              transform: translate(-1px, -1px) rotate(1deg);
            }
            90% {
              transform: translate(2px, 2px) rotate(0deg);
            }
            100% {
              transform: translate(1px, -2px) rotate(-1deg);
            }
          }
          
          // for extend
          .span {
            color: #0301FA;
            animation: glitch .4s linear infinite;
            animation-direction: alternate;
            position: absolute;
            transform: translateY(0px);
          }
          
          .glithc span {
            position: absolute;
          }
          
          .glitch span:first-child {
            @extend .span;
            left: 0;
          }
          
          .glitch span:nth-child(2) {
            @extend .span;
            left: 25px;
          }
          
          .glitch span:nth-child(3) {
            @extend .span;
            left: 50px;
          }
          
          .glitch span:nth-child(4) {
            @extend .span;
            left: 75px;
          }
          
          .glitch span:nth-child(5) {
            @extend .span;
            left: 100px;
          }
          
          .glitch span:nth-child(6) {
            @extend .span;
            left: 125px;
          }
          
          @keyframes glitch {
            0% {
              transform: translateY(-10%);
              transform: translateX(-5%);
            }
            50% {
              transform: translateY(-10%);
              transform: translateX(-10%);
              color: #01FA01;
            }
            100% {
              transform: translateY(10%);
              transform: translateX(5%);
              color: #FA0103;
              clip: rect(40px, 0px, 40px, 0px);
            }
          }
</style>