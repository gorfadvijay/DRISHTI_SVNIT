
  
  <style type="text/css">
    #gearwheel-a {
  height: 400px;
  width: 400px;
  border-radius: 50% 50%;
  background: radial-gradient(circle, #4d94ff 10%,  #ffff33 10%,  #ffff33 20%, transparent 20%), linear-gradient(0deg, transparent calc(50% - 10px),  #ffff33 calc(50% - 10px),  #ffff33 calc(50% + 10px), transparent calc(50% + 10px)), linear-gradient(90deg, transparent calc(50% - 10px),  #ffff33 calc(50% - 10px),  #ffff33 calc(50% + 10px), transparent calc(50% + 10px)), radial-gradient(circle, #1a1a1a 40%,  #ffff33 40%,  #ffff33 60%, transparent 60%), linear-gradient(22.5deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(45deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(67.5deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(90deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(112.5deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(135deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(157.5deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(180deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px));
  position: absolute;
  top: 20px;
  left: 20px;
  -webkit-animation: spin 10s linear infinite;
          animation: spin 10s linear infinite;
}

#gearwheel-b {
  height: 200px;
  width: 200px;
  border-radius: 50% 50%;
  background: radial-gradient(circle, #4d94ff 10%,  #ffff33 10%,  #ffff33 20%, transparent 20%), linear-gradient(34deg, transparent calc(50% - 10px),  #ffff33 calc(50% - 10px),  #ffff33 calc(50% + 10px), transparent calc(50% + 10px)), linear-gradient(124deg, transparent calc(50% - 10px),  #ffff33 calc(50% - 10px),  #ffff33 calc(50% + 10px), transparent calc(50% + 10px)), radial-gradient(circle, #1a1a1a 40%,  #ffff33 40%,  #ffff33 60%, transparent 60%), linear-gradient(79deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(124deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(169deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px)), linear-gradient(214deg, transparent calc(50% - 19px),  #ffff33 calc(50% - 19px),  #ffff33 calc(50% + 19px), transparent calc(50% + 19px));
  position: absolute;
 top: 2px;
  left: 356px;
  animation: spin 5s linear infinite reverse;
}

#mech {
  position: absolute;
  top: 150px;
  right: 0;
  bottom: 0;
  left: -150px;
  margin: auto;
  width: 500000px;
  height: 50px;
}


@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

  </style>

  


<body>

  <div id="mech">
  <div id="gearwheel-a"></div>
  <div id="gearwheel-b"></div>
</div>
  
  

</body>
