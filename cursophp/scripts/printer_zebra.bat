@echo off
mode 80,20

# Retornar nome das impressoras em uso
wmic printer get name

# Retornar nome da impressora default
wmic printer where default=true get name

# Definir uma impressora como default
wmic printer where name="nome da impressora" call setdefaultprinter

# Cancelar todos os documentos de uma impressora
wmic printer where name="nome da impressora" call cancelalljobs

# Enviar impressão de teste
wmic printer where name="nome da impressora" call printtestpage