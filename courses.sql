USE course;

CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    views INT NOT NULL,
    price DECIMAL(8,2) NOT NULL
);

INSERT INTO courses (image, link, date, views, price)
VALUES ('c++.png', 'https://www.youtube.com/watch?v=OXGznpKZ_sA', '2023-10-24', 10460, 56.32),('python.jpg', 'https://www.youtube.com/watch?v=rfscVS0vtbw', '27 Nov 2023', '14,502', '75.3'),
('ruby.png', 'https://www.youtube.com/watch?v=t_ispmWmdjY', '06 Dec 2022', '11,906', '123'),
('visualstudio_code-card.png', 'https://www.youtube.com/watch?v=REG-p_eFNIw', '07 Jan 2023', '8,460', '55'),
('js.png', 'https://www.youtube.com/watch?v=PkZNo7MFNFg', '27 May 2023', '19,632', '202.35'),
('php.jpg', 'https://www.youtube.com/watch?v=OK_JCtrrv-c', '06 Jun 2020', '16,777', '102'),
('Julia_Programming_Language_Logo.svg.png', 'https://www.youtube.com/watch?v=4igzy3bGVkQ&list=PLP8iPy9hna6SCcFv3FvY_qjAmtTsNYHQE', '24 Dec 2023', '12,555', '15.3'),
('lisp.png', 'https://www.youtube.com/watch?v=ymSq4wHrqyU', '27 Sep 2023', '17,333', '95.2'),
('Haskell-Programming-Language.jpg', 'https://www.youtube.com/watch?v=Vgu82wiiZ90&list=PLe7Ei6viL6jGp1Rfu0dil1JH1SHk9bgDV', '03 May 2022', '9,996', '60');