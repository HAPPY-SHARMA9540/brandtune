

//============== video poppu============= 
function openVideo(id) {
    document.getElementById("frame").src = `https://www.youtube.com/embed/${id}?autoplay=1`;
    document.getElementById("popup").classList.add("active");
}

function closeVideo() {
    document.getElementById("frame").src = "";
    document.getElementById("popup").classList.remove("active");
}

// ===============counter js =========================

const counters = document.querySelectorAll('.counter');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {

    if (entry.isIntersecting) {
      const counter = entry.target;
      const target = +counter.getAttribute('data-target');

      let count = 0;
      const speed = target / 100;

      const update = () => {
        if (count < target) {
          count += speed;
          counter.innerText = Math.ceil(count);
          requestAnimationFrame(update);
        } else {
          counter.innerText = target + "+";
        }
      };

      update();
      observer.unobserve(counter);
    }

  });
}, { threshold: 0.6 });

counters.forEach(counter => {
  observer.observe(counter);
});


//============================= FAQ=========================

document.querySelectorAll(".faq-question").forEach(btn => {
  btn.addEventListener("click", () => {
    const item = btn.parentElement;

    item.classList.toggle("active");
  });
});


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'center'  // Ensures the section is centered when scrolled into view
        });
    });
});


document.querySelector("form").addEventListener("submit", function(e) {
  const input = document.getElementById("cont_phone");
  let num = input.value.replace(/\D/g, '');

  if (num.length !== 10) {
    e.preventDefault();
    document.getElementById("usercontphone").innerText = "Enter valid 10 digit number";
    return;
  }

  // hidden input me +91 ke sath bhejo
  let hidden = document.createElement("input");
  hidden.type = "hidden";
  hidden.name = "cont_phone";
  hidden.value = "+91" + num;

  this.appendChild(hidden);

  input.removeAttribute("name"); // duplicate avoid
});

//===================== puppo=====================

  // open
document.getElementById("openPopup").onclick = function(e) {
  e.preventDefault();
  document.getElementById("popupForm").style.display = "block";
};

// close button
document.getElementById("closePopup").onclick = function() {
  document.getElementById("popupForm").style.display = "none";
};

// outside click close
window.onclick = function(e) {
  let popup = document.getElementById("popupForm");
  if (e.target === popup) {
    popup.style.display = "none";
  }
};




// ===============================price pup pop==============




//===================== puppo=====================

  // open
document.getElementById("openPopupp").onclick = function(e) {
  e.preventDefault();
  document.getElementById("popupFormm").style.display = "block";
};

// close button
document.getElementById("closePopupp").onclick = function() {
  document.getElementById("popupFormm").style.display = "none";
};

// outside click close
window.onclick = function(e) {
  let popup = document.getElementById("popupFormm");
  if (e.target === popup) {
    popup.style.display = "none";
  }
};