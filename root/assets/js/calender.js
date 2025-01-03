const tasks = [
    { name: "Bimbingan TA", deadline: 2 },  // <= 3 hari
    { name: "Big Data", deadline: 1 },      // <= 3 hari
    { name: "Latihan TBO", deadline: 5 },   // > 3 hari & <= 7 hari
    { name: "Mentoring", deadline: 10 },    // > 7 hari
    { name: "Diskusi Proposal", deadline: null }, // Tidak ada deadline
];

function categorizeTasks(tasks) {
    tasks.forEach(task => {
        const li = document.createElement("li");
        li.textContent = task.name;

        if (task.deadline === null) {
            document.querySelector("#not-important .tasks").appendChild(li);
        } else if (task.deadline <= 3) {
            document.querySelector("#priority .tasks").appendChild(li);
        } else if (task.deadline > 3 && task.deadline <= 7) {
            document.querySelector("#important .tasks").appendChild(li);
        } else if (task.deadline > 7) {
            document.querySelector("#not-urgent .tasks").appendChild(li);
        }
    });
}

// Jalankan fungsi untuk mengisi kuadran
categorizeTasks(tasks);
