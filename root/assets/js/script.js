let currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

function renderCalendar(month, year) {
    const monthYear = document.getElementById('month-year');
    const calendarBody = document.getElementById('calendar-body');
    
    const months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni", 
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    monthYear.innerHTML = `${months[month]} ${year}`;
    
    // Clear previous calendar data
    calendarBody.innerHTML = '';

    // Get the first day of the month
    const firstDay = (new Date(year, month).getDay() + 6) % 7;

    
    // Get the number of days in the month
    const lastDate = new Date(year, month + 1, 0).getDate();
    
    let row = document.createElement('tr');
    
    // Empty cells before the first day
    for (let i = 0; i < firstDay; i++) {
        const emptyCell = document.createElement('td');
        emptyCell.classList.add('empty');
        row.appendChild(emptyCell);
    }

    // Create cells for the days of the month
    for (let date = 1; date <= lastDate; date++) {
        const cell = document.createElement('td');
        cell.textContent = date;
        row.appendChild(cell);

        // Start a new row every Sunday (7th day)
        if (new Date(year, month, date).getDay() === 0) {
            calendarBody.appendChild(row);
            row = document.createElement('tr');
        }
    }

    // If there are remaining days in the last row, fill in empty cells to complete the row
    const remainingCells = row.children.length;
    if (remainingCells > 0 && remainingCells < 7) {
        for (let i = remainingCells; i < 7; i++) {
            const emptyCell = document.createElement('td');
            emptyCell.classList.add('empty');
            row.appendChild(emptyCell);
        }
    }

    // Append the last row if it's not empty
    if (row.children.length > 0) {
        calendarBody.appendChild(row);
    }
}

function changeMonth(direction) {
    currentMonth += direction;

    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    } else if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }

    renderCalendar(currentMonth, currentYear);
}

// Initial render
renderCalendar(currentMonth, currentYear);
