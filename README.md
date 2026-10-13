# Documentação da API

## 1. Notícias

Endpoints responsáveis pelo gerenciamento das notícias.

| Método | Endpoint             | Descrição                  | Status |
| ------ | -------------------- | -------------------------- | ------ |
| GET    | `/api/noticias`      | Listar todas as notícias   | 200 OK |
| GET    | `/api/noticias/{id}` | Visualizar notícia pelo ID | 200 OK |
| POST   | `/api/noticias`      | Cadastrar notícia          | —      |
| PUT    | `/api/noticias/{id}` | Editar notícia             | —      |
| DELETE | `/api/noticias/{id}` | Excluir notícia            | —      |

### Campos para cadastro e edição

Utilizados nos métodos **POST** e **PUT**.

| Campo          | Descrição                            |
| -------------- | ------------------------------------ |
| `categoria_id` | Identificador da categoria           |
| `titulo`       | Título da notícia                    |
| `resumo`       | Resumo da notícia                    |
| `conteudo`     | Conteúdo completo da notícia         |
| `imagem`       | Imagem da notícia                    |
| `ativo`        | Status da notícia (ativa ou inativa) |
| `usuario_id`   | Identificador do usuário             |

### Exemplo de JSON — POST /api/noticias

```json
{
    "categoria_id": 1,
    "titulo": "Nova tecnologia é lançada",
    "resumo": "Conheça as novidades do setor tecnológico.",
    "conteudo": "Conteúdo completo da notícia...",
    "imagem": "noticia.jpg",
    "ativo": true,
    "usuario_id": 1
}
```

---

## 2. Categorias

Endpoints responsáveis pela consulta das categorias de notícias.

| Método | Endpoint          | Descrição                  |
| ------ | ----------------- | -------------------------- |
| GET    | `/api/categorias` | Listar todas as categorias |

---

## 3. Autenticação

Endpoints responsáveis pela autenticação dos usuários.

| Método | Endpoint      | Descrição                       |
| ------ | ------------- | ------------------------------- |
| POST   | `/api/login`  | Autenticar usuário              |
| POST   | `/api/logout` | Encerrar sessão de autenticação |

---

## 4. Resumo dos Endpoints

```http
# NOTÍCIAS
GET     /api/noticias
GET     /api/noticias/{id}
POST    /api/noticias
PUT     /api/noticias/{id}
DELETE  /api/noticias/{id}

# CATEGORIAS
GET     /api/categorias

# AUTENTICAÇÃO
POST    /api/login
POST    /api/logout
```

---

**Observação:** Os códigos de resposta dos endpoints que ainda não possuem status informado deverão ser definidos conforme a implementação da API.
