# Grappling Tracker

A training log for BJJ and grappling: log a session, see which techniques you're training, and see your progress.

This is a rewrite of the previous Laravel version: a Python (FastAPI) API, a React frontend, and infrastructure as code.

## Layout

```
api/     FastAPI backend (Python 3.12, SQLAlchemy 2, Alembic, PostgreSQL)
web/     React frontend (Vite), coming later
infra/   Terraform + Ansible, coming later
docker/  Local development helpers
```

## Running locally

Requirements: Docker, and Python 3.12 with [uv](https://docs.astral.sh/uv/).

```bash
# 1. Start PostgreSQL (dev database "gt" and test database "gt_test")
docker compose up -d --wait

# 2. Configure the API
cp api/.env.example api/.env

# 3. Install dependencies (creates api/.venv)
cd api
uv sync
```

Checks:

```bash
uv run ruff check .
uv run ruff format --check .
uv run mypy .
uv run pytest
```

<!-- TODO: how to run the API server and migrations, once the app exists. -->
