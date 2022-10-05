/**************** navbar animation ****************/ 
gsap.from(".icon-nav", {
    opacity: 0, 
    x: 170, 
    duration: 1.3
  });
gsap.from(".logo-anim", {
    opacity: 0, 
    x: 150, 
    duration: 1.3
  });

  gsap.from(".accueil", {
    opacity: 0, 
    x: 300, 
    duration: 1.4
  }); 
  gsap.from(".alouer", {
    opacity: 0, 
    x: 450, 
    duration: 1.4
  }); 
  gsap.from(".avendre", {
    opacity: 0, 
    x: 600, 
    duration: 1.4
  }); 
  gsap.from(".contact", {
    opacity: 0, 
    x: 750, 
    duration: 1.4
  }); 
  gsap.from(".reserver", {
    opacity: 0, 
    x: 900, 
    duration: 1.6
  });
/************** navbar animation end **************/ 

/***************** Content Title *****************/ 
gsap.from(".bienvenue", {
    opacity: 0, 
    y: 150, 
    duration: 1.1
  });
  gsap.from(".cc-title", {
    opacity: 0, 
    y: 300, 
    duration: 1.2
  });
  gsap.from(".text-home-section", {
    opacity: 0, 
    y: 450, 
    duration: 1.3
  });
  gsap.from(".btn-reserver", {
    opacity: 0, 
    y: 600, 
    duration: 1.4
  });
/***************** Content Title  end *****************/ 

/***************** Trigger search *****************/ 
gsap.registerPlugin(ScrollTrigger);
gsap.from(".book-form", {
    scrollTrigger: {
        trigger: ".bienvenue",
        start: "-120px",
        end: "-100px",
        toggleActions: "play none none none",
    },
    scale:0.5, 
    opacity:0, 
    duration: 1.1,
    ease:Linear.easeNone
});

gsap.from(".input-where", {
    scrollTrigger: {
        trigger: ".bienvenue",
        start: "-30px",
        end: "-10px",
        toggleActions: "play none none none",
    },
    scale:0.5, 
    opacity:0, 
    duration: 1,
    delay: 0.25,
    ease:Linear.easeNone
});

gsap.from(".input-when", {
    scrollTrigger: {
        trigger: ".bienvenue",
        start: "-30px",
        end: "-10px",
        toggleActions: "play none none none",
    },
    scale:0.5, 
    opacity:0, 
    delay: 0.50,
    duration: 1,
    ease:Linear.easeNone
});
gsap.from(".input-how", {
    scrollTrigger: {
        trigger: ".bienvenue",
        start: "-30px",
        end: "-10px",
        toggleActions: "play none none none",
    },
    scale:0.5, 
    opacity:0, 
    delay: 0.75,
    duration: 1,
    ease:Linear.easeNone
});
gsap.from(".input-btn", {
    scrollTrigger: {
        trigger: ".bienvenue",
        start: "-30px",
        end: "-10px",
        toggleActions: "play none none none",
    },
    scale:0.5, 
    delay: 1,
    opacity:0, 
    duration: 1,
    ease:Linear.easeNone
});
/*************** trigger search end *****************/ 

/****************** trigger video *******************/ 

gsap.from(".video-container", {
    scrollTrigger: {
        trigger: ".text-home-section",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -150, 
    duration: 1.1
});
gsap.from(".content-text-video", {
    scrollTrigger: {
        trigger: ".text-home-section",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: 150, 
    duration: 1.1
});
/****************** trigger video end *******************/ 

/****************** trigger  last post *******************/ 
gsap.from(".title-last-post-anim", {
    scrollTrigger: {
        trigger: ".video-container",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -150,
    duration: 1.1
});
gsap.from(".box-container-anim", {
    scrollTrigger: {
        trigger: ".video-container",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    delay: 0.5, 
    opacity: 0, 
    y: 150, 
    duration: 1.2
});

/****************** trigger service *******************/ 
gsap.from(".services", {
    scrollTrigger: {
        trigger: ".title-last-post-anim",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -150,
    duration: 1.1
});
gsap.from(".box-service-anim", {
    scrollTrigger: {
        trigger: ".title-last-post-anim",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    delay: 0.5, 
    opacity: 0, 
    y: 150, 
    duration: 1.2
});

/****************** trigger destination *******************/ 
gsap.from(".title-destination-anim", {
    scrollTrigger: {
        trigger: ".services",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -150,
    duration: 1.1
});
gsap.from(".box-destination-anim", {
    scrollTrigger: {
        trigger: ".services",
        start: "-100px",
        end: "-80px",
        toggleActions: "play none none none",
    },
    delay: 0.5, 
    opacity: 0, 
    y: 150, 
    duration: 1.2
});

/****************** trigger testimonial *******************/ 

gsap.from(".testimonial-anim", {
    scrollTrigger: {
        trigger: ".box-img-start-anim",
        start: "-110px",
        end: "-60px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -150, 
    duration: 1.1
});
gsap.from(".comment-box-anim", {
    scrollTrigger: {
        trigger: ".box-img-start-anim",
        start: "-110px",
        end: "-60px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: 150, 
    duration: 1.1
});
/****************** trigger testimonial end *******************/ 

/****************** trigger annonce *******************/ 
gsap.from(".title-annonce-anim", {
    scrollTrigger: {
        trigger: ".star-anim-annonce",
        start: "-120px",
        end: "-100px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -150,
    duration: 1.1
});
gsap.from(".annonce-box-anim", {
    scrollTrigger: {
        trigger: ".star-anim-annonce",
        start: "-120px",
        end: "-100px",
        toggleActions: "play none none none",
    },
    delay: 0.5, 
    opacity: 0, 
    y: 150, 
    duration: 1.2
});

/****************** trigger banner *******************/ 
gsap.from(".anim-end-banner", {
    scrollTrigger: {
        trigger: ".start-pre-footer",
        start: "-200px",
        end: "-180px",
        toggleActions: "play none none none",
    },
    delay: 0.5, 
    opacity: 0, 
    y: 150, 
    duration: 1.2
});

gsap.from(".left-anim-footer", {
    scrollTrigger: {
        trigger: ".start-pre-footer",
        start: "-200px",
        end: "-130px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: -170,
    duration: 1.5
});
gsap.from(".right-anim-footer", {
    scrollTrigger: {
        trigger: ".start-pre-footer",
        start: "-200px",
        end: "-130px",
        toggleActions: "play none none none",
    },
    opacity: 0, 
    x: 170,
    duration: 1.5
});
/****************** trigger banner end *******************/ 

/****************** Location page anim *******************/ 
gsap.from(".card-anim", {
    opacity: 0, 
    y: 190, 
    duration: 1.5
  });

  /****************** contact page anim *******************/ 
gsap.from(".form-contact-container", {
    opacity: 0, 
    y: 210, 
    duration: 1.5
  });

  gsap.from(".contain-form", {
    opacity: 0, 
    x: -230, 
    duration: 1.5
  }); 