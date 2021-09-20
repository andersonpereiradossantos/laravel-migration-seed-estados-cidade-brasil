# Laravel - Migrations e Seeds dos Estados e Cidade do Brasil
[![NPM](https://img.shields.io/npm/l/react)](https://github.com/andersonpereiradossantos/laravel-migration-seed-estados-cidade-brasil/blob/main/LICENSE) 
# Sobre o código
Arquivos de migração e inserção (migrations e seeds) Laravel de todos os estados e cidades do Brasil atualizados (02/09/2021) com dados extraídos do [IBGE](https://www.ibge.gov.br/geociencias/organizacao-do-territorio/estrutura-territorial/23701-divisao-territorial-brasileira.html?=&t=downloads). Contém também as Models de Estado e Cidade com todos os campos mapeados e já relacionados através do Eloquent.

Na seguinte estrutura:
![DER](https://github.com/andersonpereiradossantos/assets/blob/main/laravel-migration-seeds-estados-cidade-der.png?raw=true)
##### Estado
- Código UF (codigo_uf, primary key)
- UF (uf)
- Nome (nome)

##### Cidade
- Id (id autoincremento)
- Código UF (codigo_uf, foreign key estado) 
- Código Munícipio (uf)
- Nome (nome)

# Como executar o projeto
Pré-requisitos: Laravel 5.X, 6.X, 7.X, 8.x ou superior

```bash
# Clonar repositório
git clone https://github.com/andersonpereiradossantos/laravel-migration-seed-estados-cidade-brasil.git

# Adicionar arquivos nas respectivas pastas

# Executar o comando de migração (Com bastante cautela para não perder os dados existentes no seu banco de dados)
php artisan migrate --seed
```

# Exemplos de utilização com o Eloquent
```php
// Obter todos os estados com suas respectivas cidades
$estado = Estado::with('Cidade')->get();

// Obter todos as cidades da Bahia (codigo_uf = 29)
$cidades_bahia = Estado::with('Cidade')->where('codigo_uf', 29)->get();
```
# Autor
Anderson Pereira dos Santos

[Linkedin](https://www.linkedin.com/in/andersonpereirasantos)

[Github](https://github.com/andersonpereiradossantos)
