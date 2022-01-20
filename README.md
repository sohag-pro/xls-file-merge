# Merge two xls files into one file

## Example
### file one

| Key      | Message |   |   |   |
|----------|---------|---|---|---|
| language | English |   |   |   |
|          |         |   |   |   |
|          |         |   |   |   |

### File two

| Key      | Message |   |   |   |
|----------|---------|---|---|---|
| language | Bangla  |   |   |   |
|          |         |   |   |   |
|          |         |   |   |   |

### Final Output

| Key      | Message | Message |   |   |
|----------|---------|---------|---|---|
| language | English | Bangla  |   |   |
|          |         |         |   |   |
|          |         |         |   |   |

## Requirements
1. The input files must be in xls/xlsx format
2. PHP must be installed
3. Composer must be installed

## How to use
1. Clone the repository from [GitHub](https://github.com/sohag-pro/xls-file-merge.git) by using the following command:
```
git clone https://github.com/sohag-pro/xls-file-merge.git
```
2. Run the following command to install the dependencies:
```
composer install
```
3. Replace the `first_file.xls` and `second_file.xls` with the path of the files you want to merge in `index.php`.

4. Run the following command to run the application:
```
php index.php
```

Note: The application will generate a file named `merged_file.xls` in the same directory of the application.


## License
The script is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).