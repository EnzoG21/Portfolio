-- Create table for player statistics
CREATE TABLE player_stats (
  id INT PRIMARY KEY AUTO_INCREMENT,
  player_id INT,
  season VARCHAR
(10),
  games_played INT,
  touchdowns INT,
  passing_yards INT,
  rushing_yards INT,
  sacks INT,
  fumbles INT,
  tackles INT,
  FOREIGN KEY
(player_id) REFERENCES players
(id)
);

-- Insert sample data for player statistics
INSERT INTO player_stats
    (player_id, season, games_played, touchdowns, passing_yards, rushing_yards, sacks, fumbles, tackles)
VALUES
    (1, '2022-2023', 16, 10, 2500, 800, 8, 2, 45),
    (1, '2023-2024', 12, 8, 1800, 600, 4, 3, 30),
    (2, '2022-2023', 16, 12, 3000, 500, 10, 1, 55),
    (2, '2023-2024', 14, 10, 2800, 400, 6, 2, 40);
