document.getElementById("demoForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const form = e.target;

    const data = {
        name: form.name.value,
        email: form.email.value,
        phone: form.phone.value,
        course: form.course.value
    };
    console.log(data);

    const res = await fetch("/api/book-demo.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });

    const result = await res.json();
    document.getElementById("responseMsg").innerText = result.message;

    if (result.status === "success") {
        form.reset();
    }
});
