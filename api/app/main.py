from typing import Annotated

from fastapi import Depends, FastAPI
from sqlalchemy import text
from sqlalchemy.orm import Session

from app.db import get_db

app = FastAPI()


@app.get("/health")
def health() -> dict[str, str]:
    return {"status": "ok"}


@app.get("/health/db")
def health_db(db: Annotated[Session, Depends(get_db)]) -> dict[str, str]:
    _ = db.execute(text("SELECT 1"))
    return {"database": "ok"}
