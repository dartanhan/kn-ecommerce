# KN Cosméticos — Storefront E-commerce

Projeto do novo Storefront / E-commerce B2C da **KN Cosméticos**, operando de forma desacoplada do ERP legado.

---

## 🚀 Tecnologias

- **PHP 8.4-FPM**
- **Laravel 13** (`laravel/framework: 13.x-dev`)
- **Livewire 3**
- **Tailwind CSS v4** + Vite
- **Docker & Docker Compose** (ambiente isolado na porta **9010**)
- **Nginx Alpine**

---

## 📦 Inicialização com Docker

Para subir o ambiente conteinerizado do Storefront:

```bash
docker compose up -d
```

O projeto estará acessível em:
👉 **[http://localhost:9010](http://localhost:9010)**

Para parar os containers:
```bash
docker compose down
```

---

## 🔒 Regras de Isolamento

1. O Storefront roda em containers próprios (`kn-storefront-app` e `kn-storefront-nginx`) e em rede própria (`kn-storefront-network`).
2. Não há dependência ou modificação nos containers do ERP existente (`erp-app`, `erp-nginx:9005`, `erp-redis`).
3. O banco de dados configurado localmente é SQLite mínimo, sem conexão direta com o MySQL de produção do ERP.
