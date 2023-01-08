 111 111


# NameCaseLib
NameCaseLib — библиотека PHP5, предназначенная для автоматического склонения ФИО в русском и украинском языках. Уникальная особенность состоит в том, что библиотека содержит одинаковые методы для работы с ФИО на русском и украинском языках.

## Инструкция
- Демонстрация работы - http://namecaselib.com/case/
- Документация - http://namecaselib.com/book/

## 0.4 (2011-07-09)
- Полная переработка кода
- Создание для каждого слова класса NCLNameCaseWord
- Правила для склонения имен и фамилий объединены
- Множество исправлений правил
- Полная переработка ядра системы
- Добавлена поддержка работы с разными регистрами слов

## 0.3 (2011-07-02)
- Добавлен украинский язык
- Все функции склонения работают одинаково для русского и украинского языков
- Создан класс с общими функциями
- Украинский язык может склонять в «кличний відмінок»

## 0.1.2 (2011-05-05)
- Написана функция поиска имени, фамилии, отчества в строке.
- Добавлена функция быстрого склонения NCLNameCaseRu::q(), которая принимает обязательный параметр ФИО в любом формате и возвращает строку в нужно падеже.

## 0.1.1 (2011-05-03)
- Написана функция определения пола NCLNameCaseRu::GenderAutoDetect() — отлично справляется с парами Имя Фамилия, по моим тестам дает 100% прохождение тестов (2000 пар имен и фамилий). Если указано отчество, пол определяет без проблем. Для просто имен вероятность правильного определения больше 98,5%. Для просто фамилий — больше 96%.

## 0.1.0 (2011-05-01)
- Первая версия библиотеки