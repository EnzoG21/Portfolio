// Define the game events
const gameEvents = [
  {
    name: "Bombers VS Vikings",
    date: new Date("2023-11-05T18:00:00"),
  },
  {
    name: "Vikings VS Stallions",
    date: new Date("2023-12-03T15:30:00"),
  },
  {
    name: "Rams VS Vikings",
    date: new Date("2023-12-10T20:15:00"),
  },
  {
    name: "Vikings VS Crusaders",
    date: new Date("2024-02-04T12:45:00"),
  },
  {
    name: "Vikings VS Muddogs",
    date: new Date("2024-02-11T19:00:00"),
  },
];

// Get the countdown element
const countdownElement = document.getElementById("countdown");

// Function to update the countdown
function updateCountdown() {
  const now = new Date().getTime();

  // Find the next game event
  let nextEvent;
  for (let i = 0; i < gameEvents.length; i++) {
    if (gameEvents[i].date.getTime() > now) {
      nextEvent = gameEvents[i];
      break;
    }
  }

  if (nextEvent) {
    // Calculate the time remaining
    const distance = nextEvent.date.getTime() - now;

    // Calculate days, hours, minutes, and seconds
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the countdown
    countdownElement.innerHTML = `${nextEvent.name} starts in: ${days}d ${hours}h ${minutes}m ${seconds}s`;
  } else {
    // No upcoming events
    countdownElement.innerHTML = "No upcoming events";
  }
}

// Update the countdown immediately
updateCountdown();

// Update the countdown every second
setInterval(updateCountdown, 1000);
