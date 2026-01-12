const form = document.getElementById("demoForm");
const btn = document.getElementById("submitBtn");
const btnText = document.getElementById("btnText");
const msgEl = document.getElementById("responseMsg");

let msgTimeout;

function showButtonMessage(text, type = "success", duration = 3000) {
    clearTimeout(msgTimeout);

    btn.classList.add("loading");
    btn.disabled = true;

    msgEl.innerText = text;
    msgEl.className = `btn-message ${type}`;

    msgTimeout = setTimeout(() => {
        btn.classList.remove("loading");
        btn.disabled = false;

        msgEl.innerText = "";
        msgEl.className = "btn-message";
    }, duration);
}

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const data = {
        name: form.name.value.trim(),
        email: form.email.value.trim(),
        code: form.code.value.trim(),
        phone: form.phone.value.trim(),
        course: form.course.value
    };

    try {
        const res = await fetch("/api/book-demo.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        });

        const result = await res.json();

        if (result.status === "success") {
            showButtonMessage(result.message, "success", 3000);
            form.reset();
        } else {
            showButtonMessage(result.message, "error", 4000);
        }

    } catch (err) {
        showButtonMessage("Server error. Try again.", "error", 4000);
    }
});
