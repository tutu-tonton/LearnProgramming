import datetime
from fastapi import FastAPI, Depends
from typing import List
from sqlalchemy.orm import Session

from . import crud, models, schemas
from .database import SessionLocal, engine

# sqliteデータベース作成
models.Base.metadata.create_all(bind=engine)

app = FastAPI()

# dbのsession確立する


def get_db():
    db = SessionLocal()
    try:
        yield db
    finally:
        db.close()

# ========== Read ==========

# @app.get("/")
# async def index():
#     return {"messagee": "success"}


@app.get("/users", response_model=List[schemas.User])
async def read_users(db: Session = Depends(get_db), skip: int = 0, limit: int = 100):
    users = crud.get_users(db, skip=skip, limit=limit)
    return users


@app.get("/rooms", response_model=List[schemas.Room])
async def read_rooms(db: Session = Depends(get_db), skip: int = 0, limit: int = 100):
    rooms = crud.get_rooms(db, skip=skip, limit=limit)
    return rooms


@app.get("/bookings", response_model=List[schemas.Booking])
async def read_bookings(db: Session = Depends(get_db), skip: int = 0, limit: int = 100):
    bookings = crud.get_bookings(db, skip=skip, limit=limit)
    return bookings


@app.post("/rooms")
async def rooms(rooms: Room):
    return {"rooms": rooms}


@app.post("/bookings")
async def bookings(bookings: Booking):
    return {"bookings": bookings}
