let CodeRepository = {};

CodeRepository.level1 = (
    "print(\"Hello, World!\")\n"
);

CodeRepository.level2 = (
    "x = 10\n" +
    "y = 10\n" +
    "radius = 8\n\n" +
    "function update()\n" +
    "  x = x + 1\n" +
    "end\n\n" +
    "function draw()\n" +
    "  clear(0)\n" +
    "  circle(x, y, radius)\n" +
    "end\n"
);

CodeRepository.level3 = (
    "x = 94\n" +
    "y = 5\n" +
    "gravity = 0.1\n" +
    "speed = 0\n" +
    "screen_height = 124\n\n" +
    "function update()\n" +
    "  speed = speed + gravity\n" +
    "  y = y + speed\n" +
    "  if y >= screen_height then\n" +
    "    y = screen_height\n" +
    "  end\n" +
    "end\n\n" +
    "function draw()\n" +
    "  clear()\n" +
    "  circle(x, y, 4)\n" +
    "end\n"
);

CodeRepository.level4 = (
    "sun_x = 94\n" +
    "sun_y = 64\n\n" +
    "planet_x = 0\n" +
    "planet_y = 0\n\n" +
    "angle = 0\n" +
    "distance = 30\n\n" +
    "function update()\n" +
    "  angle = angle + 0.05\n" +
    "  planet_x = planet_x + 1\n" +
    "  planet_y = planet_y + 1\n" +
    "end\n\n" +
    "function draw()\n" +
    "  clear()\n" +
    "  circle(sun_x, sun_y, 8, 14, 14)\n" +
    "  circle(planet_x + sun_x, planet_y + sun_y, 4, 8, 8)\n" +
    "end\n"
);

CodeRepository.level5 = (
    "target_x = 120\n" +
    "target_y = 90\n\n" +
    "bullet_x = 0\n" +
    "bullet_y = 0\n" +
    "bullet_distance = 0\n" +
    "bullet_angle = 0\n\n" +
    "function update()\n" +
    "  bullet_angle = 0\n\n" +
    "  bullet_x = math.cos(bullet_angle) * bullet_distance\n" +
    "  bullet_y = math.sin(bullet_angle) * bullet_distance\n\n" +
    "  bullet_distance = bullet_distance + 1\n" +
    "end\n\n" +
    "function draw()\n" +
    "  clear()\n" +
    "  circle(target_x, target_y, 6, 6, 6)\n" +
    "  circle(bullet_x, bullet_y, 2, 15, 15)\n" +
    "end\n"
);

module.exports = CodeRepository;
